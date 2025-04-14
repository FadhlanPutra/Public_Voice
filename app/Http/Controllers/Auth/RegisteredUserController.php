<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $user = Auth::user();

        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:masyarakat,username,' . $user->id_masyarakat . ',id_masyarakat',
            'telp' => 'nullable|string|max:15',
            'foto' => 'nullable|image|max:2048', // Maks 2MB
            'bio' => 'nullable|string',
            'email' => 'required|email|unique:masyarakat,email,' . $user->id_masyarakat . ',id_masyarakat',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'pekerjaan' => 'nullable|string|max:255',
            'tempat_tinggal' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto) {
                Storage::delete('public/' . $user->foto);
            }

            $fotoPath = $request->file('foto')->store('profile', 'public');
            $user->foto = $fotoPath;
        }

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'telp' => $request->telp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'disabilitas' => $request->disabilitas,
            'tempat_tinggal' => $request->tempat_tinggal,
            'pekerjaan' => $request->pekerjaan,
            'username' => $request->username,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
