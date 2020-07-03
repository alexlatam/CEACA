<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Service_Category;
use File;

class ServicioController extends Controller
{
    public function index(){
    	return view('cms.servicios_main');
    }

    public function crearServicio(){
    	$categorias = Service_Category::all();
    	return view('cms.servicios.crear_servicio')->with(compact('categorias'));
    }


    public function guardarServicio(Request $request){
        $file = $request->file('imagen_servicio');

    	$servicio = new Service;
    	$servicio->titulo = $request->titulo_servicio;
    	$servicio->service_categoria_id = $request->categoria_servicio; 
    	$servicio->descripcion =$request->descripcion_servicio;

         //verificamos que la imagen exista
        if($file){
            $path = public_path() . '/servicios_imagen';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $servicio->imagen = $fileName;
                $servicio->save();
            }

            return back()->with('message', 'servicio guardado correctamente');

        } else {
            return back()->with('message', 'no se pudo guardar imagen');
        }
    }

    public function editarServicio(Request $request, $id){
        $servicio = Service::find($id);
        $categorias = Service_Category::all();
        return view('cms.servicios.editar_servicios')->with(compact('servicio', 'categorias'));
    }

    public function actualizarServicio(Request $request, $id){
        $file = $request->file('imagen_servicio');
        $servicio = Service::find($id);

        $servicio->titulo = $request->titulo_servicio;
        $servicio->service_categoria_id = $request->categoria_servicio; 
        $servicio->descripcion =$request->descripcion_servicio;
        
        if($file){

            if($servicio->imagen){
                if(substr($servicio->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/servicios_imagen/' . $servicio->imagen;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $servicio->imagen === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/servicios_imagen';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $servicio->imagen = $fileName;
                        $servicio->save();
                    }

                    return back()->with('message','Servicio actualizado con éxito');
                    // return back();
                } else {
                    return back()->with('message','No se pudo actualizar la imagen con éxito');
                }
            }
        } else {
            $servicio->save();
            return back()->with('message','Actualizado con éxito');
        }

        
    }


    public function eliminarServicio(Request $request, $id){
        $servicio = Service::find($id);
        if($servicio->imagen){
            if(substr($servicio->imagen, 0, 4)  === "http"){
                $deleted = true;
            } else {
                $fullpath = public_path() . '/servicios_imagen/' . $servicio->imagen;
                $deleted = File::delete($fullpath);
            }
        }
        if($deleted || $servicio->imagen === null){
            $servicio->delete();
            return back()->with('message','Eliminado con éxito');
        } else {
            return back()->with('message','No se pudo eliminar el servicio');
        }
        
    }
}
