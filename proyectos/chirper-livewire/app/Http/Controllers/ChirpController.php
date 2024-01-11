<?php

namespace App\Http\Controllers;

class ChirpController extends Controller
{
    public function index()
    {
        return view('chirps', []);
    }
}
