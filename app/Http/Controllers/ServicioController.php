<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Category;

class ServicioController extends Controller
{
    public function index(){
    	$servicios = Service::all();
    	return view('cms.servicios.servicios')->with(compact('servicios'));
    }

    public function crearServicio(){
    	$categorias = Category::all();
    	return view('cms.servicios.crear_servicio')->with(compact('categorias'));
    }


    public function guardarServicio(Request $request){
    	$servicio = new Service;
    	$servicio->titulo = $request->titulo_servicio;
    	$servicio->categoria_id = $request->categoria_servicio; 
    	$servicio->descripcion =$request->descripcion_servicio;
    	$servicio->imagen =$request->imagen_servicio;
    	$servicio->save();

 
    	return back()->with('message','Creado con éxito');
    }

    public function editarServicio(Request $request, $id){
        $servicio = Service::find($id);
        $categorias = Category::all();
        return view('cms.servicios.editar_servicios')->with(compact('servicio', 'categorias'));
    }

    public function actualizarServicio(Request $request, $id){
        $servicio = Service::find($id);

        $servicio->titulo = $request->titulo_servicio;
        $servicio->categoria_id = $request->categoria_servicio; 
        $servicio->descripcion =$request->descripcion_servicio;
        $servicio->imagen =$request->imagen_servicio;
        $servicio->save();

        return back()->with('message','Actualizado con éxito');
    }

    public function eliminarServicio(Request $request, $id){
        $servicio = Service::find($id);
        $servicio->delete();
        return back()->with('message','Eliminado con éxito');
    }
}
