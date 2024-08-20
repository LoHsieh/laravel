<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
 
Route::get('/products/index', [ProductsController::class, 'index']);
Route::get('/products/show', [ProductsController::class, 'show']);
Route::get('/products/store', [ProductsController::class, 'store']);
Route::get('/products/update', [ProductsController::class, 'update']);
Route::get('/products/delete', [ProductsController::class, 'delete']);

Route::view('/', 'welcome')
    ->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
