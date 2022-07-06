<?php

namespace App\Http\Controllers;

use App\Models\Kalibrasi;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    public function rekap(){
        $sensor = DB::table('sensor')->paginate(10);
        return view('back.tabels.rekap',[
            'sensor' => $sensor,
        ]);
    }
    public function input(Request $request){
        $data = $request->all();
        $data['suhu'] = $request->suhu;
        $data['ph'] = $request->ph;
        $data['tds'] = $request->tds;
        $data['ppu'] = $request->ppu;
        $data['ppd'] = $request->ppd;
        $data['ppn'] = $request->ppn;
        $data['pab'] = $request->pab;
        $data['created_at'] = $request->now;

        Sensor::create($request->all());

        // dd($data);
    }

    public function tabelsuhu(){
        $chartsuhu = DB::select("SELECT suhu FROM sensor ORDER BY id DESC LIMIT 20");

        
        return view('back.tabels.suhu', [
            'chartsuhu' => $chartsuhu,
        ]);
    }

    
}
