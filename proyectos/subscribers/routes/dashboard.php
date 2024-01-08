<?php

use App\Http\Controllers\SubscriberController;

Route::view('/', 'dashboard')
    ->name('dashboard');

Route::get('subscribers', [SubscriberController::class, 'all'])
    ->name('subscribers.all');
