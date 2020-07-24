<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitacion;
use App\Cat_capacitacion;
use App\Info;


class CapacitacionesController extends Controller
{
    public function home(Request $request)
    {	
    	
    	$info = Info::all();
    	$capacitaciones = Capacitacion::all();
    	$cat_servicios = Cat_capacitacion::all();

    	if(isset($request->categoria))
    	{
    		$capacitaciones = Capacitacion::where('id', $request->categoria)->get();

    	}

    	return view('capacitaciones', compact('capacitaciones', 'cat_servicios', 'info'));
    }
}
