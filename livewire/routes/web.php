<?php

use App\Http\Controllers\ThreadController;
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

Route::resource('threads', ThreadController::class)
    ->except('show', 'index', 'destroy')
    ->middleware('auth');

require __DIR__ . '/auth.php';
