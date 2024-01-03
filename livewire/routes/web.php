<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowThreads;

Route::get('/', ShowThreads::class)
    ->middleware('auth')->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
