<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');

// Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login.form');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('register', [RegisterController::class, 'index'])->name('register.form');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
// });