<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


// Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login.form');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('register', [RegisterController::class, 'index'])->name('register.form');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
// });

Route::middleware('auth')->group(function () {
    Route::get('/email/verify', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', VerifyEmailController::class)->middleware('signed')->name('verification.verify');
    Route::post('/email/verification-notification', EmailVerificationNotificationController::class)->name('verification.send');
});

Route::get('/', [MainController::class, 'index'])->name('home');

Route::middleware('verified')->group(function () {
});
