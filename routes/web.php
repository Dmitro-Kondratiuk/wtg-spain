<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UsersController::class, 'index'])->name('users.index');
Route::get('/login', [UsersController::class, 'login'])->name('users.login');
Route::get('/register', [UsersController::class, 'register'])->name('users.register');
Route::get('/task', [UsersController::class, 'task'])->name('users.tasks');
