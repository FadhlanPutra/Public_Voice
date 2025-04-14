<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\SocialiteController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Http\Response;


Route::get('/', function () {
    $response = new Response(view('welcome'));
    $response->header('Cache-Control', 'public, max-age=86400'); // Cache selama 1 hari
    return $response;
});

Route::get('/dashboard', function () {
    $response = new Response(view('dashboard'));
    $response->header('Cache-Control', 'private, max-age=300'); // Cache selama 5 menit
    return $response;
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/informasi', function () {
    $response = new Response(view('informasi'));
    $response->header('Cache-Control', 'public, max-age=86400'); // Cache selama 1 hari
    return $response;
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
    Route::get('petugas/laporan', [PetugasController::class, 'laporan'])->name('petugas.laporan');
    Route::resource('petugas', PetugasController::class);
});

Route::group(['middleware' => ['auth', 'role:admin']], function (){
    Route::get('admin/pengaduan', [AdminController::class, 'pengaduan'])->name('admin.pengaduan');
    Route::get('admin/pengguna', [AdminController::class, 'pengguna'])->name('admin.pengguna');
    Route::get('admin/statistik', [AdminController::class, 'statistik'])->name('admin.statistik');
    Route::resource('admin', AdminController::class);
});

/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

// SITEMAP
Sitemap::create()
    ->add(Url::create('/')->setLastModificationDate(now()))
    ->add(Url::create('/dashboard')->setLastModificationDate(now()))
    ->add(Url::create('/informasi')->setLastModificationDate(now()))
    ->writeToFile(public_path('sitemap.xml'));


require __DIR__.'/auth.php';
