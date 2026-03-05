<?php

use App\Http\Controllers\Shopcontroller;
use Illuminate\Support\Facades\Route;

/*
 * Public routes 
 */

Route::get('/', \App\Http\Controllers\welcomecontroller::class)->name('home');

/*
 * User zone routes
 */

//Route::get('shops', [::class], 'listofshop')->name('shops');
Route::get('shops', [\App\Http\Controllers\Shopcontroller::class, 'listofshops'])->name('shops');
Route::get('shops/{name_of_shop}', [\App\Http\Controllers\Shopcontroller::class, 'showshopdetails'])->name('shops');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php'; 

/*
 * Admin zone routes 
 */