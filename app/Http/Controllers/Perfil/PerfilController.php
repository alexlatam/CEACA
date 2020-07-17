<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Info;


class PerfilController extends Controller
{
    public function home()
    {	
    	$info = Info::all();
    	return view('perfil.index', compact('info'));
    }
}
