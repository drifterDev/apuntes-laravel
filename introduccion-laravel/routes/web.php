<?php

// use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

/*
Route:get Consultar
Route:post Insertar
Route:put Actualizar
Route:delete Eliminar
*/

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('blog', function () {
//     $posts = [
//         ["id" => 1, "title" => "PHP", "slug" => "php"],
//         ["id" => 2, "title" => "CSS", "slug" => "css"],
//         ["id" => 3, "title" => "JavaScript", "slug" => "js"],
//         ["id" => 4, "title" => "SQL", "slug" => "sql"],
//         ["id" => 5, "title" => "HTML", "slug" => "html"],
//     ];
//     return view('blog', ["posts" => $posts]);
// })->name('blog');

// // ...blog/casa
// Route::get('blog/{slug}', function ($slug) {
//     return view("post", ["post" => $slug]);
// })->name('post');

// // ...buscar?id=5
// Route::get('buscar', function (Request $request) {
//     return $request->all();
// });

// Una forma de hacerlo
// Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('blog', [PageController::class, 'blog'])->name('blog');
// Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

// Una forma de hacerlo
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    // Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});

Route::redirect('dashboard',  'posts')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class)->middleware(['auth', 'verified'])->except('show');

require __DIR__ . '/auth.php';
