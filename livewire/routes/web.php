<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowThreads;
use App\Livewire\ShowThread;

Route::get('/', ShowThreads::class)
    ->middleware('auth')->name('dashboard');

Route::get('/thread/{thread}', ShowThread::class)
    ->middleware('auth')->name('thread');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
