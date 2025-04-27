<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\AuthController;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Website\BlogController;

// Auth
Route::prefix('auth')->name('auth.')->group(function () {
    // Sign In
    Route::get('/sign-in', [AuthController::class, 'signIn'])->name('signIn');

    // Sign Up
    Route::get('/sign-up', [AuthController::class, 'signUp'])->name('signUp');

    // Forgot Password
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
});

// Homepage
Route::get('/', [PageController::class, 'home'])->name('home');

// Features
Route::get('/features', [PageController::class, 'features'])->name('features');

// Help Center
Route::get('/help-center', [PageController::class, 'helpCenter'])->name('helpCenter');

// Blog
Route::prefix('blog')->name('blog.')->group(function () {
    // Index
    Route::get('/', [BlogController::class, 'index'])->name('index');

    // Show
    Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
});

// About
Route::get('/about', [PageController::class, 'about'])->name('about');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Terms of Use
Route::get('/terms-of-use', [PageController::class, 'termsOfUse'])->name('termsOfUse');

// Cookie Policy
Route::get('/cookie-policy', [PageController::class, 'cookiePolicy'])->name('cookiePolicy');

// Privacy Policy
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacyPolicy');
