<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// AUTH ROUTES (custom controller)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('products', ProductController::class)->middleware('auth');

// DASHBOARD (Controller)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// PRODUCT CRUD (Controller)
Route::resource('products', ProductController::class)
    ->middleware('auth');
