<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursoController extends Controller
{
    public function index()
    {
    	return view('cms.recursos.index');
    }

    public function crearRecurso()
    {
    	return view('cms.recursos.crear_recurso');
    }
}
