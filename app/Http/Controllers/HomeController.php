<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => 'Home',
            "active" => 'home',
        ]);
    }

    public function show()
    {
        return view('bloghome');
    }
}
