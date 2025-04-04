<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\UserListController;
use App\Http\Middleware\LoginStateMiddleWare;
use Illuminate\Routing\RouteDependencyResolverTrait;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LogInController::class, 'index'])->name('login');
Route::post('/login', [LogInController::class, 'login'])->name('login.post');

Route::middleware([LoginStateMiddleWare::class])->group(function () {
    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::post('/settings', [SettingController::class, 'passwordReset'])->name('settings.post');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/users/list', [UserListController::class, 'index'])->name('users.list');
    Route::get('/users/edit/{id}', [UserEditController::class, 'index'])->name('users.edit');
    Route::get('/logout', [LogOutController::class, 'logout'])->name('logout');
    Route::post('/users', [UserController::class, 'store'])->name('users.post');
    Route::post('/users/remove', [UserListController::class, 'destroy'])->name('users.remove');
    Route::post('/users/edit', [UserEditController::class, 'update'])->name('users.edit.post');
});



