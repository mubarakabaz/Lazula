<?php

namespace App\Http\Controllers;

use App\Models\Kalibrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KalibrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensor = DB::table('sensor')->orderBy('created_at', 'desc')->limit(1)->get();
        $kalibrasi = Kalibrasi::all();
        return view('back.kalibrasi.index', [
            'sensor' => $sensor,
            'kalibrasi' => $kalibrasi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kalibrasi = Kalibrasi::find($id);
        return view('back.kalibrasi.edit', compact('kalibrasi'));
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
        $data = $request->all();
        $data = Kalibrasi::findOrFail($id);

        $data->update([
            'phSetA' => $request->phSetA,
            'phSetB' => $request->phSetB,
            'tdsSetA' => $request->tdsSetA,
            'tdsSetB' => $request->tdsSetB,
        ]);
        

        Alert::info('Berhasil', 'Kalibrasi berhasil diubah');
        return redirect()->route('kalibrasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
