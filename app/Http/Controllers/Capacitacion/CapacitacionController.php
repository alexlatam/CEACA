<?php

namespace App\Http\Controllers\Capacitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Capacitacion;
use App\Cat_capacitacion;

use File;
class CapacitacionController extends Controller
{
    public function index()
    {
    	$capacitaciones = Capacitacion::all();
    	return view('cms.capacitaciones.capacitaciones', compact('capacitaciones'));
    }

    public function crearCapacitacion()
    {

    	$categorias = Cat_capacitacion::all();
    	return view('cms.capacitaciones.crear_capacitacion', compact('categorias'));
    }

    public function guardarCapacitacion(Request $request)
    {
        $file = $request->file('imagen_capacitacion');
        $logo = $request->file('logo_capacitacion');


        $capacitacion = new Capacitacion;
        $capacitacion->titulo                   = $request->titulo_capacitacion;
        $capacitacion->cat_capacitaciones_id    = $request->categoria_capacitacion; 
        $capacitacion->descripcion              = $request->descripcion_capacitacion;


        //verificamos que el logo exista
        if($logo){
            $path = public_path() . '/capacitaciones/logos';
            $logoName = uniqid() . $logo->getClientOriginalName();
            $logoMoved = $logo->move($path, $logoName);

            //verificamos que el logo haya sido movido y guardamos la ruta
            if($logoMoved){
                $capacitacion->logo = $logoName;
            } else {
                return back()->with('message', 'El logo no se pudo guardar correctamente');
            }
            
        }

         //verificamos que la imagen exista
        if($file){
            $path = public_path() . '/capacitaciones';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $capacitacion->imagen = $fileName;
                $capacitacion->save();
            }

            return back()->with('message', 'Capacitacion guardada correctamente');

        } else {
            return back()->with('message', 'no se pudo guardar imagen');
        }
    }

    public function editarCapacitacion(Request $request, $id){
        $capacitacion = Capacitacion::find($id);
        $categorias = Cat_capacitacion::all();
        return view('cms.capacitaciones.editar_capacitacion')->with(compact('capacitacion', 'categorias'));
    }


    public function actualizarCapacitacion(Request $request, $id){
        $file = $request->file('imagen_capacitacion');
        $logo = $request->file('logo_capacitacion');

        $capacitacion = Capacitacion::find($id);

        $capacitacion->titulo = $request->titulo_capacitacion;
        $capacitacion->cat_capacitaciones_id = $request->categoria_capacitacion; 
        $capacitacion->descripcion =$request->descripcion_capacitacion;
        


        //verificamos que exista un logo
        if($logo)
        {
            if($capacitacion->logo){
                if(substr($capacitacion->logo, 0, 4)  === "http"){
                    $logoDeleted = true;
                } else {
                    //encontramos el logo y lo eliminamos
                    $fullpath = public_path() . '/capacitaciones/logos/' . $capacitacion->logo;
                    $logoDeleted = File::delete($fullpath);
                }
            }

            // verificamos que sea eliminado y agregamos el nuevo
            if(isset($logoDeleted) || $servicio->logo === null)
            {
                if($logo){
                    $path = public_path() . '/capacitaciones/logos';
                    $logoName = uniqid() . $logo->getClientOriginalName();
                    $logoMoved = $logo->move($path, $logoName);
                }

                if($logoMoved)
                {
                    $capacitacion->logo = $logoName;
                } else {
                    return back()->with('message', 'No se pudo actualizar el logo');
                }
            }
        }






        if($file){

            if($capacitacion->imagen){
                if(substr($capacitacion->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/capacitaciones/' . $capacitacion->imagen;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $capacitacion->imagen === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/capacitaciones';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $capacitacion->imagen = $fileName;
                        $capacitacion->save();
                    }

                    return back()->with('message','Capacitacion actualizada con éxito');
                    // return back();
                } else {
                    return back()->with('message','No se pudo actualizar la imagen con éxito');
                }
            }
        } else {
            $capacitacion->save();
            return back()->with('message','Capacitacion actualizada con éxito');
        }

    }

    public function eliminarCapacitacion(Request $request, $id){
        $capacitacion = Capacitacion::find($id);

        //verificar que exista un logo y eliminar
        if($capacitacion->logo)
        {
            $fullpath = public_path() . '/capacitaciones/logos/' . $capacitacion->logo;
            $logoeleted = File::delete($fullpath);
        }


        //verificar que exista una imagen y eliminar
        if($capacitacion->imagen){
            if(substr($capacitacion->imagen, 0, 4)  === "http"){
                $deleted = true;
            } else {
                $fullpath = public_path() . '/capacitaciones/' . $capacitacion->imagen;
                $deleted = File::delete($fullpath);
            }
        }
        if($deleted || $capacitacion->imagen === null){
            $capacitacion->delete();
            return back()->with('message','Eliminado con éxito');
        } else {
            return back()->with('message','No se pudo eliminar el capacitacion');
        }
        
    }
}
