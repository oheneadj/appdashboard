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

Route::get('/users', App\Livewire\Users\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('users.index');

Route::get('/users/create', App\Livewire\Users\Create::class)
    ->middleware(['auth', 'verified'])
    ->name('users.create');

Route::get('/users/{user}', App\Livewire\Users\Show::class)
    ->middleware(['auth', 'verified'])
    ->name('users.show');

require __DIR__.'/settings.php';
