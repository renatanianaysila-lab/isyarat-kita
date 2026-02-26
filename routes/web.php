<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'login');

Route::view('/register', 'register');

Route::post('/upload-bukti', function (Illuminate\Http\Request $request) {

    $request->validate([
        'nama' => 'required',
        'transaksi' => 'required',
        'bukti' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048'
    ]);

    return back()->with('success', 'Bukti pembayaran berhasil dikirim!');
});