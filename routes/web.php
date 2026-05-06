<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Auth;

// ===================== HALAMAN UTAMA =====================
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ===================== AUTHENTICATION =====================
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $user = Auth::user();

        if ($user->role === 'guru') {
            return redirect('/dashboard-guru');
        } elseif ($user->role === 'admin') {
            return redirect('/dashboard-admin');
        } else {
            return redirect('/dashboard-murid');
        }
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function (Request $request) {
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
        'role'     => 'required|in:murid,guru',
    ]);

    $user = \App\Models\User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
        'role'     => $request->role,
    ]);

    Auth::login($user);

    if ($user->role === 'guru') {
        return redirect('/dashboard-guru');
    }
    return redirect('/dashboard-murid');
})->name('register.post');

// ===================== LOGOUT =====================
Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// ===================== DASHBOARD MURID =====================
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-murid', [MuridController::class, 'dashboard'])->name('dashboard.murid');
    Route::get('/dashboard-murid/materi', [MuridController::class, 'materi'])->name('murid.materi');
    Route::get('/dashboard-murid/history', [MuridController::class, 'history'])->name('murid.history');
    Route::get('/dashboard-murid/katalog', [MuridController::class, 'katalog'])->name('murid.katalog');
    Route::get('/dashboard-murid/feedback', [FeedbackController::class, 'index'])->name('murid.feedback');
    Route::post('/dashboard-murid/feedback', [FeedbackController::class, 'simpan'])->name('murid.feedback.simpan');
});

// ===================== DASHBOARD GURU =====================
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-guru', [GuruController::class, 'dashboard'])->name('dashboard.guru');
    Route::get('/dashboard-guru/kelola-video', [GuruController::class, 'kelolaVideo'])->name('guru.kelola-video');
    Route::post('/dashboard-guru/kelola-video', [GuruController::class, 'simpanVideo'])->name('guru.simpan-video');
    Route::delete('/dashboard-guru/kelola-video/{id}', [GuruController::class, 'hapusVideo'])->name('guru.hapus-video');
    Route::get('/dashboard-guru/monitoring', [GuruController::class, 'monitoringMurid'])->name('guru.monitoring');
});

// ===================== PROFIL =====================
Route::middleware(['auth'])->group(function () {
    Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');
    Route::get('/profil-guru', function () {
        return view('sections.guru-profile');
    })->name('profil.guru');
    Route::get('/profil-guru/edit', function () {
        return view('sections.edit-profile-guru');
    })->name('profil.guru.edit');
});

// ===================== PAKET & PEMBAYARAN =====================
Route::get('/paket', function () {
    return view('paket.paket');
})->name('paket');

Route::get('/pembayaran', function () {
    return view('paket.pembayaran');
})->name('pembayaran');

Route::middleware(['auth'])->post('/proses-pembayaran', [TransaksiController::class, 'beli'])->name('proses.pembayaran');

// ===================== VIDEO PLAYER =====================
Route::get('/video-player', function () {
    return view('belajar.video-player');
})->name('video.player');

Route::get('/video-player/{video}', function ($video) {
    return view('belajar.video-player', ['video' => $video]);
})->name('video.player.detail');

// ===================== KUIS =====================
Route::get('/kuis-abjad', function () {
    return view('belajar.kuis-abjad');
})->name('kuis.abjad');

Route::get('/kuis-angka', function () {
    return view('belajar.kuis-angka');
})->name('kuis.angka');

Route::get('/dashboard-kuis', function () {
    return view('dashboard.dashboard-kuis');
})->name('dashboard.kuis');