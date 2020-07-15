<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membership;
use App\Resource;
class RecursoController extends Controller
{
    public function index()
    {
    	$recursos = Resource::all();
    	return view('cms.recursos.index', compact('recursos'));
    }

    public function crearRecurso()
    {	
    	$membresias = Membership::all();
    	return view('cms.recursos.crear_recurso', compact('membresias'));
    }

    public function guardarRecurso(Request $request)
    {	


    	$file = $request->file('recurso_file');

    	$recurso = new Resource;

    	$recurso->titulo = $request->recurso_title;
    	$recurso->descripcion = $request->recurso_descripcion;
    	$recurso->precio = 180000;	
    	
    	if($file){
    	    $path = public_path() . '/recursos';
    	    $fileName = uniqid() . $file->getClientOriginalName();
    	    $moved = $file->move($path, $fileName);

    	    //verificamos que la imagen haya sido movida y guardamos la ruta
    	    if($moved){
    	        $recurso->recurso = $fileName;
    	        $recurso->save();
    	        $recurso->memberships()->attach($request->get('recurso_membership'));
    	        
    	        
    	    }

    	    return back()->with('message', 'Recurso guardado correctamente');

    	} else {
    		return back()->with('error', 'No se pudo guardar el recurso');
    	}

    }
}
