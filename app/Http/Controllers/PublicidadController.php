<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicidad;
class PublicidadController extends Controller
{
    public function index(){
    	$publicidades = Publicidad::all();
    	return view('cms.publicidades')->with(compact('publicidades'));
    }

    public function crearPublicidad(){
    	return view('cms.publicidad.crear_publicidad');
    }
}
