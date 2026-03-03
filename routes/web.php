<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\welcomecontroller::class)->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php'; 