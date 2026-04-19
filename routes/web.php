<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $email = $request->email;
    $password = $request->password;

    // login dummy GURU
    if ($email === 'guru@gmail.com' && $password === '12345678') {
        session([
            'dummy_login' => true,
            'dummy_user' => [
                'name' => 'Guru',
                'email' => 'guru@gmail.com',
                'role' => 'guru'
            ]
        ]);

        return redirect('/dashboard-guru');
    }

    // login dummy MURID
    if ($email === 'murid@gmail.com' && $password === '12345678') {
        session([
            'dummy_login' => true,
            'dummy_user' => [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'murid'
            ]
        ]);

        return redirect('/dashboard-murid');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
});

Route::post('/logout', function (Request $request) {
    session()->forget('dummy_login');
    session()->forget('dummy_user');
    return redirect('/login');
})->name('logout');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Dashboard MURID dengan proteksi session
Route::get('/dashboard-murid', function () {
    if (!session('dummy_login')) {
        return redirect('/login');
    }

    return view('dashboard-murid');
})->name('dashboard.murid');

// Dashboard GURU dengan proteksi session
Route::get('/dashboard-guru', function () {
    if (!session('dummy_login')) {
        return redirect('/login');
    }

    return view('dashboard-guru');
})->name('dashboard.guru');

Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

Route::get('/paket', function () {
    return view('paket');
})->name('paket');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::post('/proses-pembayaran', function () {
    return redirect()->route('paket')->with('success', 'Pembayaran berhasil diproses!');
})->name('proses.pembayaran');

Route::get('/video-player', function () {
    return view('video-player');
});

Route::get('/dashboard-kuis', function () {
    if (!session('dummy_login')) {
        return redirect('/login');
    }

    return view('dashboard-kuis');
})->name('dashboard.kuis');