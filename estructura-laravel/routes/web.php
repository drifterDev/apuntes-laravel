<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home', function () {
//     return view('home');
// })->name('home');

// Route::get('blog', function () {
//     $posts = [
//         ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
//         ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
//         ['id' => 3, 'title' => 'TailwindCSS', 'slug' => 'tailwind'],
//     ];
//     return view('blog', ['posts' => $posts]);
// })->name('blog');

// Route::get('home', [PageController::class, 'home'])->name('home');

// Route::get('blog', [PageController::class, 'blog'])->name('blog');

// Route::get('post/{slug}', [PageController::class, 'post'])->name('post');

// Route::get('post/{slug}', function ($slug) {
//     return view('post', ['post' => $slug]);
// })->name('post');

// Route::get('buscar', function (Request $request) {
//     return $request->all();
// });

Route::controller(PageController::class)->group(function () {
    Route::get('home', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('post/{post:slug}', 'post')->name('post');
});
