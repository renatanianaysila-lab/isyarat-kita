<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// LOGIN
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    return redirect('/dashboard-murid');
});

// REGISTER
Route::get('/register', function () {
    return view('register');
});

// DASHBOARD MURID
Route::get('/dashboard-murid', function () {
    return view('dashboard-murid');
});