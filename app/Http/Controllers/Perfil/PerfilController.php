<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Info;
use App\Plan;
use App\Resource;

class PerfilController extends Controller
{
    public function home()
    {	
    	$info = Info::all();
    	return view('perfil.index', compact('info'));
    }

    public function membresias()
    {	
    	$info = Info::all();
    	$planes = Plan::all();
    	return view('perfil.membresia', compact('info', 'planes'));
    }

    public function recursos()
    {
    	$info = Info::all();
    	$recursos = Resource::all();
    	return view('perfil.recursos', compact('info', 'recursos'));
    }
}
