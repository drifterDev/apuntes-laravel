<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {
    $posts=[
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
        ['id' => 3, 'title' => 'TailwindCSS', 'slug' => 'tailwind'],
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('post/{slug}', function ($slug) {
    return view('post', ['post' => $slug]);
})->name('post');

Route::get('buscar', function (Request $request) {
    return $request->all();
});
