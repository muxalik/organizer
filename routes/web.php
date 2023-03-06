<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('login', [LoginController::class, 'index'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('register', [RegisterController::class, 'index'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::middleware('guest')->group(function () {
    Route::controller(ResetPasswordController::class)->name('password.')->group(function () {
        Route::get('forgot-password', 'index')->name('request');
        Route::post('/forgot-password', 'email')->name('email');
        Route::get('/reset-password/{token}', 'reset')->name('reset');
        Route::post('/reset-password', 'update')->name('update');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [MainController::class, 'index'])->name('home');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('email/verify', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', VerifyEmailController::class)->middleware('signed')->name('verification.verify');
    Route::post('email/verification-notification', EmailVerificationNotificationController::class)->name('verification.send');

    Route::get('id{user}/profile', [ProfileController::class, 'index'])->name('user.profile');
    
    Route::get('/email', [EmailController::class, 'index'])->name('email');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat');
    Route::get('/calendar', [MainController::class, 'index'])->name('calendar');
    Route::get('/kanban', [MainController::class, 'index'])->name('kanban');
    Route::get('/users', [UserController::class, 'users'])->name('users');
});

Route::get('/support', [MainController::class, 'support'])->name('support');

Route::middleware('verified')->group(function () {
});
