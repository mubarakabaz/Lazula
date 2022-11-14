<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class TabelSensorController extends Controller
{
    public function index(Request $request){
        $sensor = Sensor::all();
        
        return view('back.tabels.index');
    }
}
