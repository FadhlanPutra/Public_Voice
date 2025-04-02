<?php

use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/informasi', function(){
    return view('informasi');
})->middleware(['auth', 'verified'])->name('informasi');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/settings', [ProfileController::class, 'setting'])->name('settings');
});

Route::group(['middleware' => ['auth', 'role:user']], function (){
    Route::resource('users', UserController::class);
    // Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
});

Route::group(['middleware' => ['auth', 'role:petugas']], function (){
    Route::get('petugas/history', [PetugasController::class, 'history'])->name('petugas.history');
    Route::resource('petugas', PetugasController::class);
});

require __DIR__.'/auth.php';
