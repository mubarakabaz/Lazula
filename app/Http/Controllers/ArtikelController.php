<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = DB::table('artikel')->paginate(10);
        
        return view('back.blog.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('back.blog.create', [
            'kategori' => $kategori,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'body' => 'required',
            'kategori_id' => 'required',
            'gambar_artikel' => 'required | file | mimes:jpeg,png,jpg | max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['excerpt'] = Str::words($request->body, 20);
        $data['user_id'] = Auth::id();
        $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');
        $data['viewers'] = 0;

        Artikel::create($data);

        Alert::success('Berhasil', 'Artikel Baru Berhasil Dibuat');
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $kategori = Kategori::all();
        // $artikel = DB::table('artikel')->where('slug', $slug)->first();

        // return view('back.blog.detail-blog', [
        //     'artikel' => $artikel,
        //     'kategori' => $kategori,
        // ]);
    }

    public function blog($slug){
        $kategori = Kategori::all();
        $artikel = DB::table('artikel')->where('slug', $slug)->first();

        return view('front.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();

        return view('back.blog.edit', [
            'artikel' => $artikel,
            'kategori' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_artikel'))){
            
            $artikel = Artikel::find($id);
            $artikel->update([
                
                'judul' => $request->judul,
                'body' => $request->body,
                'excerpt' => Str::words($request->body, 20),
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'is_active' => $request->is_active,
                'user_id' => Auth::id(),
            ]);
        } else {

            $artikel = Artikel::find($id);

            Storage::delete($artikel->gambar_artikel);
            
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'excerpt' => Str::words($request->body, 20),
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'is_active' => $request->is_active,
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel'),
                'user_id' => Auth::id(),
            ]);

            Alert::info('Berhasil', 'Data Artikel Berhasil Diubah');
            return redirect()->route('artikel.index');
        }
        // return redirect()->route('artikel.index')->with('success', 'any');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);

        Storage::delete($artikel->gambar_artikel);

        $artikel->delete();

        Alert::warning('Berhasil', 'Data Artikel Berhasil Dihapus');
        return redirect()->route('artikel.index');
    }
}
