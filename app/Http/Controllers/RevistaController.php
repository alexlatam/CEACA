<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revista;
use File;
class RevistaController extends Controller
{
    public function index()
    {
		$revistas = Revista::all();
    	return view('cms.revista')->with(compact('revistas'));
    }

    public function obtenerRevista($id)
    {
    	$revista = Revista::find($id);

    	return $revista;
    }

    public function cargandoRevista(Request $request)
    {
    	$file = $request->file('revista_file');
        $portada = $request->file('revita_portada');

    	$revista = new Revista;
    	$revista->titulo = $request->revista_name;

        if($portada)
        {
            $portadaPath = public_path() . '/revista/portada';
            $portadaName = uniqid() . $portada->getClientOriginalName();
            $portadaMoved = $portada->move($portadaPath, $portadaName);

            $revista->portada = $portadaName;
            
            if(!$portadaMoved){
                return back()->with('error', 'No se pudo cargar la portada');
            }
        }

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

    public function actualizarRevista(Request $request, $id)
    {
    	$file = $request->file('revista_file');

    	$revista = Revista::find($id);

    	$revista->titulo = $request->revista_titulo;

    	if($file){

    	    if($revista->archivo){
	            $fullpath = public_path() . '/revista/' . $revista->archivo;
	            $deleted = File::delete($fullpath);
    	    }
    	    
    	    //verificacion de que se haya eliminado la revista o que no exista el en el campo
    	    if(isset($deleted) || $revista->archivo === null){

    	        //verificamos que la revista exista
    	        if($file){
    	            $path = public_path() . '/revista';
    	            $fileName = uniqid() . $file->getClientOriginalName();
    	            $moved = $file->move($path, $fileName);
    	    
    	            //verificamos que la imagen haya sido movida y guardamos la ruta
    	            if($moved){
    	                $revista->archivo = $fileName;
    	                $revista->save();
    	            }

    	            return back()->with('message','Revista actualizada con éxito');
    	            // return back();
    	        } else {
    	            return back()->with('message','No se pudo actualizar la la revista con éxito');
    	        }
    	    }
    	} else {
    	    $revista->save();
    	    return back()->with('message','Revista actualizada con éxito');
    	}
    }

    public function eliminarRevista($id)
    {
    	$revista = Revista::find($id);

    	if($revista->archivo)
    	{
		    $fullpath = public_path() . '/revista/' . $revista->archivo;
		    $deleted = File::delete($fullpath);
    	}

        if($revista->portada)
        {
            $portadaPath = public_path() . '/revista/portada/' . $revista->portada;
            $revistaDeleted = File::delete($portadaPath);
        } else {
            $revistaDeleted = true;
        }

        if(!$revistaDeleted){
            return back()->with('error', 'No se pudo eliminar');
        }

    	if($deleted || $revista->archivo === null){
    	    $revista->delete();
    	    return back()->with('error','Eliminado con éxito');
    	} else {
    	    return back()->with('error','No se pudo eliminar la revista');
    	}
    }
}
