<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;


class SensorController extends Controller
{
    public function input(Request $request){
        
        $data = $request->all();
        $data['suhu'] = $request->suhu;
        $data['ph'] = $request->ph;
        $data['tds'] = $request->tds;
        $data['ppu'] = $request->ppu;
        $data['ppd'] = $request->ppd;
        $data['ppn'] = $request->ppn;
        $data['pab'] = $request->pab;
        
        
        Sensor::create($request->all());

        dd($data);
    }

    public function pengaturan(){
        //
    }
}
