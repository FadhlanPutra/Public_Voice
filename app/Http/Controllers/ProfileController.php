<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\SocialAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     // $request->validateWithBag('userDeletion', [
    //     //     'password' => ['required', 'current_password'],
    //     // ]);

    //     $user = $request->user();


    // // Cek apakah pengguna login dengan akun sosial (Google)
    // $socialAccount = $user->socialAccounts()->where('provider_name', 'google')->first();

    // if ($socialAccount) {
    //     // Jika login dengan Google, validasi email
    //     $request->validateWithBag('userDeletion', [
    //         'email' => ['required', 'exists:users,email', 'email'],
    //     ]);

    //     // Pastikan token Google ada
    //     $googleAccessToken = $socialAccount->access_token;
    //     if ($socialAccount && $socialAccount->access_token) {
    //         $response = Http::asForm()->post('https://oauth2.googleapis.com/revoke', [
    //             'token' => $socialAccount->access_token,
    //         ]);
        
    //         if ($response->successful()) {
    //             $socialAccount->delete(); // Hapus data akun sosial jika berhasil mencabut akses
    //         } else {
    //             // Tangani kegagalan
    //             Log::error('Failed to revoke Google access', ['response' => $response->body()]);
    //         }
    //     }

    //     // Hapus akun sosial terkait dengan Google
    //     $socialAccount->delete();
    // } else {
    //     // Jika tidak login dengan akun sosial, validasi password
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);
    // }

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }

    public function destroy(Request $request): RedirectResponse
{
    $user = $request->user();

    // Cek apakah pengguna login dengan akun sosial (Google)
    $socialAccount = $user->socialAccounts()->where('provider_name', 'google')->first();

    if ($socialAccount) {
        // Validasi email jika login melalui Google
        $request->validateWithBag('userDeletion', [
            'email' => ['required', 'exists:users,email', 'email'],
        ]);

        // Revoke akses Google jika access_token tersedia
        if ($socialAccount->access_token) {
            $response = Http::asForm()->post('https://oauth2.googleapis.com/revoke', [
                'token' => $socialAccount->access_token,
            ]);

            if ($response->successful()) {
                Log::info('Google access revoked successfully.', ['user_id' => $user->id]);
            } else {
                Log::error('Failed to revoke Google access.', ['response' => $response->body()]);
            }
        }

        // Hapus data akun sosial
        $socialAccount->delete();
    } else {
        // Validasi password jika tidak login melalui akun sosial
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);
    }

    // Logout pengguna
    Auth::logout();

    // Hapus akun pengguna
    $user->delete();

    // Invalidasi sesi
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return Redirect::to('/')->with('success', 'Your account has been deleted successfully.');
}

    public function setting(Request $request)
    {
        $user = Auth::user();
        $tab = $request->get('tab', 'profile');
        return view('settings', compact('user', 'tab'));
    }
}
