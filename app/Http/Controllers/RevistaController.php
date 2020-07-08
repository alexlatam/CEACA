<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revista;
use File;
class RevistaController extends Controller
{
    public function index()
    {
    	return view('cms.revista');
    }

    public function cargandoRevista(Request $request)
    {
    	$file = $request->file('revista_file');

    	$revista = new Revista;
    	$revista->titulo = $request->revista_name;
    	if($file)
    	{
    		$path = public_path() . '/revista';
    		$fileName = uniqid() . $file->getClientOriginalName();
    		$moved = $file->move($path, $fileName);

    		//verificamos que la imagen haya sido movida y guardamos la ruta
    		if($moved){
    		    $revista->archivo = $fileName;
    		    $revista->save();

    		    return back()->with('message', 'Revista cargada de manera éxitosa');
    		}
    	} else {
    		return back()->with('error', 'la revista no pudo ser cargada');
    	}
    }

    public function editarRevista()
    {

    }

    public function eliminarRevista($id)
    {
    	$revista = Revista::find($id);

    	if($revista->archivo)
    	{
		    $fullpath = public_path() . '/revista/' . $revista->archivo;
		    $deleted = File::delete($fullpath);
    	}

    	if($deleted || $revista->archivo === null){
    	    $revista->delete();
    	    return back()->with('error','Eliminado con éxito');
    	} else {
    	    return back()->with('error','No se pudo eliminar la revista');
    	}
    }
}
