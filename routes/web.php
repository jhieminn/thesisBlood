<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController; // idagdag si DashboardController

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Protected Routes (require login)
Route::middleware(['auth'])->group(function () {
    // Donor dashboard
    Route::get('/donor/dashboard', [DashboardController::class, 'donor'])->name('donor.dashboard');

    // Healthcare worker dashboard
    Route::get('/healthcare/dashboard', [DashboardController::class, 'healthcare'])->name('healthcare.dashboard');
});
    