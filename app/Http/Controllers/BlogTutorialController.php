<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogTutorialController extends Controller
{
    public function index()
    {
        $tutorial = DB::table('artikel')->where('kategori_id', '=', '1')->select('*')->get();

        return view('back.blog.tutorial', [
            'tutorial' => $tutorial,
        ]);
    }
}
