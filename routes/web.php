<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

// ===================== HALAMAN UTAMA =====================
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ===================== AUTHENTICATION =====================
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $email = $request->email;
    $password = $request->password;

    // Login dummy GURU
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

    // Login dummy MURID
    if ($email === 'murid@gmail.com' && $password === '12345678') {
        session([
            'dummy_login' => true,
            'dummy_user' => [
                'name' => 'Murid',
                'email' => 'murid@gmail.com',
                'role' => 'murid'
            ]
        ]);

        return redirect('/dashboard-murid');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/logout', function (Request $request) {
    session()->forget('dummy_login');
    session()->forget('dummy_user');
    return redirect('/login');
})->name('logout');

// ===================== DASHBOARD MURID =====================
Route::get('/dashboard-murid', function () {
    if (!session('dummy_login')) {
        return redirect('/login');
    }
    return view('dashboard.dashboard-murid');
})->name('dashboard.murid');

// ===================== DASHBOARD GURU =====================
Route::get('/dashboard-guru', function () {
    if (!session('dummy_login')) {
        return redirect('/login');
    }
    return view('dashboard.dashboard-guru');
})->name('dashboard.guru');

// ===================== DASHBOARD KUIS =====================
Route::get('/dashboard-kuis', function () {
    if (!session('dummy_login')) {
        return redirect('/login');
    }
    return view('dashboard.dashboard-kuis');
})->name('dashboard.kuis');

// ===================== PROFIL =====================
Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

// ===================== PAKET & PEMBAYARAN =====================
Route::get('/paket', function () {
    return view('paket.paket');
})->name('paket');

Route::get('/pembayaran', function () {
    return view('paket.pembayaran');
})->name('pembayaran');

Route::post('/proses-pembayaran', function () {
    return redirect('/dashboard-murid?menu=materi')->with('success', 'Pembayaran berhasil! Selamat belajar!');
})->name('proses.pembayaran');

// ===================== VIDEO PLAYER =====================
Route::get('/video-player', function () {
    return view('belajar.video-player');
})->name('video.player');
Route::get('/video-player/{video}', function ($video) {
    return view('belajar.video-player', ['video' => $video]);
})->name('video.player.detail');

// ===================== KUIS ABJAD =====================
Route::get('/kuis-abjad', function () {
    return view('belajar.kuis-abjad');
})->name('kuis.abjad');