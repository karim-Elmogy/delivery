<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LanguageSwitcherController;
use App\Http\Controllers\ProfileController;
Route::middleware(['auth'])->group(function () {
        // Front-end Routes
    Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');

});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

  
});

// Language switcher (detail pages redirect to the slug for the new locale)
Route::get('/lang/{locale}', [LanguageSwitcherController::class, 'switch'])->name('lang.switch');
