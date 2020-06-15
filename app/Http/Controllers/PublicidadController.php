<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use File;

class PublicidadController extends Controller
{
    public function index(){
    	$publicidades = Ads::all();
    	return view('cms.publicidades')->with(compact('publicidades'));
    }

    public function crearPublicidad($tipo){
        if($tipo === "principal"){
            $tipo = 1;
        }else if($tipo === 'secundaria'){
            $tipo = 2;
        }
    	return view('cms.publicidad.crear_publicidad')->with(compact('tipo'));
    }

    public function guardarPublicidad(Request $request){
    	$file = $request->file('publicidad_imagen');

    	$publicidad = new Ads;
    	$publicidad->tipo = $request->publicidad_tipo;
        $publicidad->url = $request->publicidad_url;
        $publicidad->orden = $request->publicidad_orden;


    	 //verificamos que la imagen exista
        if($file){
            $path = public_path() . '/publicidades_imagen';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $publicidad->imagen = $fileName;
                $publicidad->save();
            }

            return back()->with('message', 'publicidad guardada correctamente');
            // return back();
        }
    }

    public function actualizarPublicidad(Request $request, $id){
        $file = $request->file('publicidad_imagen');
        $publicidad = Ads::find($id);

        $publicidad->tipo = $request->publicidad_tipo;
        $publicidad->url = $request->publicidad_url;
        $publicidad->orden = $request->publicidad_orden;
        

        if($file){
            if($publicidad->imagen){
                if(substr($publicidad->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/publicidades_imagen/' . $publicidad->imagen;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $publicidad->imagen === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/publicidades_imagen';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $publicidad->imagen = $fileName;
                        $publicidad->save();
                    }

                    return back();
                    // return back();
                } else {
                    return back();
                }
            }
        } else {
            $publicidad->save();
            return back();
        }

    }


    public function eliminarPublicidad(Request $request, $id){
        $publicidad = Ads::find($id);

        $publicidad->delete();

        return back()->with('message','Publicidad eliminada con éxito');
    }

}
