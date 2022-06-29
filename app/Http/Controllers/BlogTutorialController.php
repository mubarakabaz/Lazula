<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogTutorialController extends Controller
{
    public function index()
    {
        return view('blog.tutorial');
    }
}
