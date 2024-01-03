<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V2\RecipeController as V2RecipeController;

Route::prefix('v2')->group(function () {
    Route::get('recipes', [V2RecipeController::class, 'index']);
});
