<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController; // Import the LoginController

// Homepage route
Route::get('/', [HomeController::class, 'welcome'])->name('home');

// Authentication routes
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Products resource routes
    Route::resource('products', ProductController::class);
    
    // Logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Other routes
Route::resource('users', UserController::class);
