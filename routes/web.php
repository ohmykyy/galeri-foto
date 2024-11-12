<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('register.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

// routes/web.php

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);






Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/about', function () {
    return view('');
});
Route::get('/explore', function () {
    return view('explore');
});
Route::get('/album', function () {
    return view('album');
});
Route::get('/create', function () {
    return view('create');
});







