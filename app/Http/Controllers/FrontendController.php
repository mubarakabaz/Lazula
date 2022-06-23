<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Iklan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function __construct($recent)
    {
        $this->recent = $recent;
    }
    public function index(Request $request)
    {
        
        $artikel = Artikel::all();

        $recentpost = Artikel::orderBy('created_at', 'desc')->take(3)->get();

        
        $kategori = Kategori::all();
        
        $iklan = Iklan::all();
        
        return view('front.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'iklan' => $iklan,
            'recentpost' => $recentpost,
        ]);
    }
    
    public function detail($slug){
        
        $iklan = Iklan::all();
        $kategori = Kategori::all();
        $artikel = Artikel::where('slug', $slug)->first();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'iklan' => $iklan,
        ]);
    }

    public function category($slug){
        
        $iklan = Iklan::all();
        $kategori = Kategori::where('slug', $slug)->first();
        $artikel = Artikel::all();

        return view('front.artikel.detail-category', [
            'kategori' => $kategori,
            'iklan' => $iklan,
            'artikel' => $artikel,
        ]);
    }

    public function about(){
        $iklan = Iklan::all();
        $kategori = Kategori::all();
        return view('front.artikel.about', [
            'iklan' => $iklan,
            'kategori' => $kategori
        ]);
    }

    public function contact(){
        $iklan = Iklan::all();
        $kategori = Kategori::all();
        return view('front.artikel.contact', [
            'iklan' => $iklan,
            'kategori' => $kategori
        ]);
    }
}
