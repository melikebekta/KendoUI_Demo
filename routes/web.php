<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/settings', [SettingController::class , 'index'])->name('settings');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/login', [LogInController::class, 'index'])->name('login');
Route::get('/', [IndexController::class, 'index'])->name('index');