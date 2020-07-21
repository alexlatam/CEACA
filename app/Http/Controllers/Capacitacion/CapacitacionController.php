<?php

namespace App\Http\Controllers\Capacitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Capacitacion;
use App\Cat_capacitacion;
class CapacitacionController extends Controller
{
    public function index()
    {
    	$capacitaciones = Capacitacion::all();
    	return view('cms.capacitaciones.capacitaciones', compact('capacitaciones'));
    }

    public function crearCapacitacion()
    {

    	$categorias = Cat_capacitacion::all();
    	return view('cms.capacitaciones.crear_capacitacion', compact('categorias'));
    }
}
