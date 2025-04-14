<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use App\Models\SocialAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProvideCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            Log::error("Socialite callback failed: " . $e->getMessage());
            return redirect()->route('login')->withErrors(['error' => "Login melalui $provider gagal."]);
        }

        $authUser = $this->findOrCreateUser($socialUser, $provider);
        Auth::login($authUser, true);

        return redirect()->route('dashboard');
    }

    private function findOrCreateUser($socialUser, $provider)
    {
        // Cari akun sosial berdasarkan provider_id dan provider_name
        $socialAccount = SocialAccount::where('provider_id', $socialUser->getId())
            ->where('provider_name', $provider)
            ->first();

        if ($socialAccount) {
            // Kembalikan user terkait jika akun sosial ditemukan
            return $socialAccount->user;
        }

        // Cari user berdasarkan email jika akun sosial tidak ditemukan
        $user = User::where('email', $socialUser->getEmail())->first();

        if (!$user) {
            // Buat user baru jika tidak ditemukan
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'password' => bcrypt(str()->random(16)),
                'username' => $this->generateUsername($socialUser->getName()),
            ]);
        }

        // Buat akun sosial baru terkait dengan user
        $user->socialAccounts()->create([
            'provider_id' => $socialUser->getId(),
            'provider_name' => $provider,
            'access_token' => $socialUser->token,
        ]);

        return $user;
    }

    private function generateUsername($name)
    {
        $baseUsername = strtolower(str_replace(' ', '_', $name));
        $username = $baseUsername;
        $counter = 1;

        while (User::where('username', $username)->exists()) {
            $username = $baseUsername . $counter;
            $counter++;
        }

        return $username;
    }
}
