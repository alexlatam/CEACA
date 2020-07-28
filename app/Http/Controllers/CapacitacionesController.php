<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitacion;
use App\Cat_capacitacion;
use App\Info;
use App\Ads;


class CapacitacionesController extends Controller
{
    public function home(Request $request)
    {	
    	
    	$info = Info::all();
    	$capacitaciones = Capacitacion::all();
		$cat_servicios = Cat_capacitacion::all();
		$cat_capacitaciones = Cat_capacitacion::all();
		$publicidad = Ads::where('seccion', 'capacitaciones')->get();

    	if(isset($request->categoria))
    	{
    		$capacitaciones = Capacitacion::where('cat_capacitaciones_id', $request->categoria)->get();

    	}

    	return view('capacitaciones', compact('capacitaciones','publicidad', 'cat_servicios', 'info', 'cat_capacitaciones'));
    }
}
