<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encabezado;
use File;

class EncabezadoController extends Controller
{
    public function index()
    {
    	$encabezados = Encabezado::all();

    	return view('cms.encabezados.index', compact('encabezados'));
    }

    public function crearEncabezado(){
    	return view('cms.encabezados.crear_encabezado');
    }


    public function guardarEncabezado(Request $request){
        $file = $request->file('imagen_encabezado');


    	$encabezado = new Encabezado;
    	$encabezado->titulo = $request->titulo_encabezado;
    	$encabezado->seccion = $request->seccion_encabezado; 
    	$encabezado->descripcion =$request->descripcion_encabezado;


  

         //verificamos que la imagen exista
        if($file){
            $path = public_path() . '/img/encabezados';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $encabezado->imagen = $fileName;
                $encabezado->save();
            }

            return back()->with('message', 'Encabezado guardado correctamente');

        } else {
            return back()->with('message', 'no se pudo guardar imagen');
        }
    }

    public function editarEncabezado(Request $request, $id){
        $encabezado = Encabezado::find($id);
        return view('cms.encabezados.editar_encabezado')->with(compact('encabezado'));
    }

    public function actualizarEncabezado(Request $request, $id){
        $file = $request->file('imagen_encabezado');

        $encabezado = Encabezado::find($id);

    	$encabezado->titulo = $request->titulo_encabezado;
    	$encabezado->seccion = $request->seccion_encabezado; 
    	$encabezado->descripcion =$request->descripcion_encabezado;
        


        if($file){

            if($encabezado->imagen){
                if(substr($encabezado->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/img/encabezados/' . $encabezado->imagen;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $encabezado->imagen === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/img/encabezados';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $encabezado->imagen = $fileName;
                        $encabezado->save();
                    }

                    return back()->with('message','Encabezado actualizado con éxito');
                    // return back();
                } else {
                    return back()->with('message','No se pudo actualizar la imagen con éxito');
                }
            }
        } else {
            $encabezado->save();
            return back()->with('message','Encabezado actualizado con éxito');
        }

        
    }


    public function eliminarEncabezado(Request $request, $id){
        $encabezado = Encabezado::find($id);


        //verificar que exista una imagen y eliminar
        if($encabezado->imagen){
            if(substr($encabezado->imagen, 0, 4)  === "http"){
                $deleted = true;
            } else {
                $fullpath = public_path() . '/img/encabezados/' . $encabezado->imagen;
                $deleted = File::delete($fullpath);
            }
        }
        if($deleted || $encabezado->imagen === null){
            $encabezado->delete();
            return back()->with('message','Encabezado eliminado con éxito');
        } else {
            return back()->with('message','No se pudo eliminar el encabezado');
        }
        
    }

}
