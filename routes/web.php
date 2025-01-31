<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepositoryController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::resource('repositories', RepositoryController::class)->middleware('auth');

Route::get('/dashboard', [PageController::class, 'home'])->name('dashboard');
