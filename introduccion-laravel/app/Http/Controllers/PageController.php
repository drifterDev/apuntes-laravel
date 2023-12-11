<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        $posts = [
            ["id" => 1, "title" => "PHP", "slug" => "php"],
            ["id" => 2, "title" => "CSS", "slug" => "css"],
            ["id" => 3, "title" => "JavaScript", "slug" => "js"],
            ["id" => 4, "title" => "SQL", "slug" => "sql"],
            ["id" => 5, "title" => "HTML", "slug" => "html"],
        ];
        return view('blog', ["posts" => $posts]);
    }

    public function post($slug)
    {
        return view("post", ["post" => $slug]);
    }
}
