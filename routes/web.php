<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/analytics', [App\Http\Controllers\AnalyticsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('analytics');

Route::get('/ecommerce', [App\Http\Controllers\EcommerceController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('ecommerce');

require __DIR__.'/settings.php';
