<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    return redirect('/dashboard-murid');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/dashboard-murid', function () {
    return view('dashboard-murid');
})->name('dashboard.murid');

Route::get('/dashboard-guru', function () {
    return view('dashboard-guru');
})->name('dashboard.guru');

Route::get('/paket', function () {
    return view('paket');
})->name('paket');

use App\Http\Controllers\ProfilController;

Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard-murid', function () {
        return view('dashboard-murid');
    });

    Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');
});