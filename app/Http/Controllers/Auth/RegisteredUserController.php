<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nik' => ['required', 'string', 'max:20', 'regex:/^\d+$/'],
            'number_phone' => ['required', 'string', 'max:20', 'regex:/^\d+$/'],
            'tanggal_lahir' => ['required', 'date'], 
            'gender' => ['required', 'string', 'in:pria,wanita'],
            'disabilitas' => ['required', 'string', 'in:ya,tidak'],
            'alamat' => ['required', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'number_phone' => $request->number_phone,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'disabilitas' => $request->disabilitas,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'username' => $request->username,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
