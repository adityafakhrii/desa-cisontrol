<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\LogoutController;

Route::get('/', [Controllers\DashboardController::class, 'index'])->middleware('auth');

Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest');

Route::post('login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest');

Route::post('logout', Controllers\LogoutController::class, 'logout')->name('logout')->middleware('auth');
