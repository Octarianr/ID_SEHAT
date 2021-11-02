<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Organ;

use Illuminate\Http\Request;

class OrganController extends Controller
{
    public function index()
    {
        return view('organs', [
            "title" => "Organ Manusia",
            "active" => "organs",
            "blogs" => Blog::all()
        ]);
    }

    public function show() 
    {
        return view('bloganatomi');
    }
}
