<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image_slider;

class SliderImageController extends Controller
{
    public function index(){
    	$sliders = Image_slider::all();
    	return view('cms.image_sliders')->with(compact('sliders'));
    }

    public function crearImageSlider($tipo){
    	$tipo = $tipo;
    	return view('cms.image_sliders.crear_image_slider')->with(compact('tipo'));
    }

    public function guardarImageSlider(Request $request){
    	$file = $request->file('slider_imagen');

    	$slider = new Image_slider;
    	$slider->titulo = $request->slider_titulo;
    	$slider->descripcion = $request->slider_descripcion;
    	$slider->orden = 1;
        $slider->url = "urlexample";

    	 //verificamos que la imagen exista
        if($file){
            $path = public_path() . '/sliders_imagen';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $slider->imagen = $fileName;
                $slider->save();
            }

            // return back();
            return back()->with('message', 'Imagen guardada correctamente');
        }else{
        	return back()->with('message', 'La imagen no pudo ser procesada');
        }

    }
}
