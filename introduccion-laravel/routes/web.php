<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route:get Consultar
Route:post Insertar
Route:put Actualizar
Route:delete Eliminar
*/

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    $posts = [
        ["id" => 1, "title" => "PHP", "slug" => "php"],
        ["id" => 2, "title" => "CSS", "slug" => "css"],
        ["id" => 3, "title" => "JavaScript", "slug" => "js"],
        ["id" => 4, "title" => "SQL", "slug" => "sql"],
        ["id" => 5, "title" => "HTML", "slug" => "html"],
    ];
    return view('blog', ["posts" => $posts]);
});

// ...blog/casa
Route::get('blog/{slug}', function ($slug) {
    return view("post", ["post" => $slug]);
});

// ...buscar?id=5
Route::get('buscar', function(Request $request) {
    return $request->all();
});
