<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Info;
use App\Plan;
use App\Cat_capacitacion;
use App\Resource;

class PerfilController extends Controller
{
    public function home()
    {	
        $user = auth()->user();

        $checkboxs = explode(',', $user->sector);

        $info = Info::all();
        $cat_capacitaciones = Cat_capacitacion::All();
    	return view('perfil.index', compact('info', 'user', 'checkboxs', 'cat_capacitaciones'));
    }

    public function membresias()
    {	
    	$info = Info::all();
        $planes = Plan::all();
        $cat_capacitaciones = Cat_capacitacion::All();
    	return view('perfil.membresia', compact('info', 'planes', 'cat_capacitaciones'));
    }

    public function recursos()
    {
    	$info = Info::all();
        $recursos = Resource::all();
        $cat_capacitaciones = Cat_capacitacion::All();
    	return view('perfil.recursos', compact('info', 'recursos', 'cat_capacitaciones'));
    }
}
