<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home_Slider;
use File;
class SliderImageController extends Controller
{
    public function index(){
    	$sliders = Home_Slider::all();
    	return view('cms.image_sliders')->with(compact('sliders'));
    }

    public function crearImageSlider(){
    	return view('cms.image_sliders.crear_image_slider');
    }

    public function guardarImageSlider(Request $request){
    	$file = $request->file('slider_imagen');


    	$slider = new Home_Slider;
    	$slider->titulo = $request->slider_titulo;
    	$slider->descripcion = $request->slider_descripcion;
    	$slider->url = $request->slider_url;
        $slider->orden = $request->slider_orden;


    	 //verificamos que la imagen exista
        if($file){
            $path = public_path() . '/img/banners';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $slider->imagen = $fileName;
                $slider->save();
            }

            // return back();
            return back()->with('message', 'Se guardo exitosamente!');
        }else{
        	return back()->with('message', 'El Slider no se pudo guardar exitosamente');
        }

    }


    public function actualizarImagenSlider(Request $request, $id)
    {   
        $file = $request->file('slider_imagen');

        $slider = Home_Slider::find($id);

        $slider->titulo = $request->slider_titulo;
        $slider->descripcion = $request->slider_descripcion;
        $slider->url = $request->slider_url;
        $slider->orden = $request->slider_orden;

        if($file)
        {
            if($slider->imagen){
                if(substr($slider->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/img/banners/' . $slider->imagen;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $slider->imagen === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/img/banners';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $slider->imagen = $fileName;
                        $slider->save();
                    }

                    return back()->with('message','Imagen actualizada con éxito');
                    // return back();
                } else {
                    return back()->with('message','No se pudo actualizar la imagen con éxito');
                }
            }
        } else {
            $slider->save();
            return back()->with('message', 'Imagen actualizado correctamente');
        }
    }

    
    public function deleteImageSlider($id){
        $servicio = Home_Slider::find($id);
            $servicio->delete();
            return back()->with('message','Eliminado con éxito');        
    }
}
