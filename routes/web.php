<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/sign-up', [SignUpController::class, 'showSignUpForm'])->name('sign-up-form');
Route::post('/sign-up', [SignUpController::class, 'signUp'])->name('sign-up');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});
