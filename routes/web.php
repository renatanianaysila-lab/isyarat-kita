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

    // login dummy sementara tanpa database
    if ($email === 'admin@gmail.com' && $password === '123456') {
        session([
            'dummy_login' => true,
            'dummy_user' => [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
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

// TANPA auth middleware dulu
Route::get('/dashboard-murid', function () {
    if (!session('dummy_login')) {
        return redirect('/login');
    }

    return view('dashboard-murid');
})->name('dashboard.murid');

Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

Route::get('/dashboard-guru', function () {
    return view('dashboard-guru');
})->name('dashboard.guru');

Route::get('/paket', function () {
    return view('paket');
})->name('paket');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

// TAMBAHKAN INI - Route untuk proses pembayaran
Route::post('/proses-pembayaran', function () {
    // Logika sementara untuk pembayaran
    // Nanti bisa diganti dengan controller yang sebenarnya
    return redirect()->route('paket')->with('success', 'Pembayaran berhasil diproses!');
})->name('proses.pembayaran');