<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $slider = Artikel::orderBy('created_at', 'desc')->take(4)->get();

        $slider_news = Artikel::where('kategori_id', '=', 1)->orderBy('created_at', 'desc')->get();

        return view('front.home', [
            'slider' => $slider,
            'slider_news' => $slider_news,
        ]);
    }
}
