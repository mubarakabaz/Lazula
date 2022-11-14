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
    
    public function index(){

        // Tampilkan Data Artikel Terbaru (limit 3)
        $forecent = Artikel::orderBy('created_at', 'desc')->take(3)->get();

        // Tampilkan Data Artikel berdasarkan Kategori
        $techartikel = Artikel::with('kategori')
                                ->where('kategori_id', '=', '1')
                                ->orderBy('created_at', 'desc')
                                ->take(2)
                                ->get();

        $sejarahartikel = Artikel::with('kategori')
                                ->where('kategori_id', '=', '2')
                                ->orderBy('created_at', 'desc')
                                ->take(3)
                                ->get();
                                
        $agriculturartikel = Artikel::with('kategori')
                                ->where('kategori_id', '=', '3')
                                ->orderBy('created_at', 'desc')
                                ->take(1)
                                ->get();
                                
        $aqidahartikel = Artikel::with('kategori')
                                ->where('kategori_id', '=', '4')
                                ->orderBy('created_at', 'desc')
                                ->take(2)
                                ->get();
                                
        $tauhdiartikel = Artikel::with('kategori')
                                ->where('kategori_id', '=', '5')
                                ->orderBy('created_at', 'desc')
                                ->take(1)
                                ->get();

        $mainartikel = Artikel::orderBy('created_at', 'desc')->take(2)->get();
        
        $slide = DB::table('artikel')->orderBy('created_at', 'desc')->take(10)->get();  

        $artikel = Artikel::all();
        $kategori = Kategori::all();
        
        $iklan = Iklan::all();
        
        return view('front.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'iklan' => $iklan,
            'forecent' => $forecent,
            'techartikel' => $techartikel,
            'sejarahartikel' => $sejarahartikel,
            'mainartikel' => $mainartikel,
            'slide' => $slide,
            'agriculturartikel' => $agriculturartikel,
            'aqidahartikel' => $aqidahartikel,
            'tauhdiartikel' => $tauhdiartikel,
        ]);
    }
    
    public function detail($slug){
        
        $iklan = Iklan::all();
        $kategori = Kategori::all();
        $artikel = Artikel::where('slug', $slug)->first();
        
        
        $forecent = Artikel::orderBy('created_at', 'desc')->take(3)->get();

        ddd($artikel);
        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'iklan' => $iklan,
            'forecent' => $forecent,
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
