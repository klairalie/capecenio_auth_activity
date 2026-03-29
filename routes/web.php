<?php

use Illuminate\Support\Facades\Route;
use
    App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'is_admin'])->name('admin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
