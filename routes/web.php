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
Route::get('shops', [\App\Http\Controllers\Shopcontroller::class, 'index'])->name('shops.index');
Route::get('shops/{shop}', [\App\Http\Controllers\Shopcontroller::class, 'show'])->name('shops.show');

Route::get('food', [\App\Http\Controllers\FoodController::class, 'index'])->name('food.index');
Route::get('food/{food}', [\App\Http\Controllers\FoodController::class, 'show'])->name('food.show');

Route::get('dashboard', \App\Http\Controllers\DashboardController::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('home/food', [\App\Http\Controllers\Home\FoodController::class, 'index'])->name('home.food.index');
Route::get('home/food/create', [\App\Http\Controllers\Home\FoodController::class, 'create']);
Route::post('home/food', [\App\Http\Controllers\Home\FoodController::class, 'store']);

require __DIR__.'/settings.php'; 

/*
 * Admin zone routes 
 */