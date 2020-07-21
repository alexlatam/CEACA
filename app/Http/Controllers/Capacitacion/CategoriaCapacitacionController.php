<?php

namespace App\Http\Controllers\Capacitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat_capacitacion;
	

class CategoriaCapacitacionController extends Controller
{
    public function index()
    {
    	$categorias = Cat_capacitacion::all();
    	return view('cms.cat_capacitacion.cat_capacitacion', compact('categorias'));
    }
}
