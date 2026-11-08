<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// get menampilkan form
Route::get('/', [PageController::class, 'login'])->name('login');

// post mengirim data
Route::post('/login', [PageController::class, 'prosesLogin'])->name('login.proses');

Route::post('/logout', [PageController::class, 'logout'])->name('logout');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/tasks', [PageController::class, 'tasks'])->name('tasks');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');