<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'about';
});

Route::view('profile', 'profile');

Route::post('profile', [ProfileController::class, 'upload']);
