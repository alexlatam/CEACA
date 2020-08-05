<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capacitacion;
use App\Cat_capacitacion;
use App\Info;
use App\Ads;
use App\Video;
use App\Encabezado;


class CapacitacionesController extends Controller
{
	public function home(Request $request)
	{

		$info = Info::all();
		$capacitaciones = Capacitacion::all();
		$videos = Video::where('seccion', 'capacitaciones')->get();
		$cat_servicios = Cat_capacitacion::all();
		$cat_capacitaciones = Cat_capacitacion::all();
		$categoria_name = "CEACA";

		$publicidad = Ads::where('seccion', 'capacitaciones')->get();


		if (isset($request->categoria)) {
			$capacitaciones = Capacitacion::where('cat_capacitaciones_id', $request->categoria)->get();
			$categoria_name = Cat_capacitacion::where('id', $request->categoria)->get()->first();

			if (stripos($categoria_name->name, 'ceaca')) {
				$encabezado = Encabezado::where('seccion', 'capacitacion ceaca')->first();
			} else {
				$encabezado = Encabezado::where('seccion', 'capacitacion asme')->first();
			}
			$categoria_name=$categoria_name->name;
		}else{
			$encabezado = Encabezado::where('seccion', 'capacitacion ceaca')->first();
		}

		return view('capacitaciones', compact('capacitaciones','categoria_name','encabezado', 'publicidad', 'cat_servicios', 'info', 'cat_capacitaciones','videos'));
	}
}
