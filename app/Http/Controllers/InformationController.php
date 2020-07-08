<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use File;

class InformationController extends Controller
{
    public function index(){
    	$telefono1 = Info::where('atributo', 'telefono 1')->first();
    	$telefono2 = Info::where('atributo', 'telefono 2')->first(); ;
    	$email = Info::where('atributo', 'email')->first();
    	$twitter = Info::where('atributo', 'twitter')->first();
    	$facebook = Info::where('atributo', 'facebook')->first();
    	$linkedin = Info::where('atributo', 'linkedin')->first();
    	$instagram = Info::where('atributo', 'instagram')->first();

    	return view('cms.informacion')->with(compact('telefono1', 'telefono2', 'twitter', 'facebook', 'linkedin', 'instagram', 'email'));
    }

    public function actualizarInformacion(Request $request){
    	$telefono1 = Info::where('atributo', 'telefono 1')->first();
    	$telefono2 = Info::where('atributo', 'telefono 2')->first(); ;
    	$email = Info::where('atributo', 'email')->first();
    	$twitter = Info::where('atributo', 'twitter')->first();
    	$facebook = Info::where('atributo', 'facebook')->first();
    	$linkedin = Info::where('atributo', 'linkedin')->first();
    	$instagram = Info::where('atributo', 'instagram')->first();

    	$telefono1->valor = $request->telefono_uno;
    	$telefono2->valor = $request->telefono_dos;
    	$email->valor = $request->email;
    	$twitter->valor = $request->twitter;
    	$facebook->valor = $request->facebook;
    	$linkedin->valor = $request->linkedin;
    	$instagram->valor = $request->instagram;

    	$telefono1->save();
    	$telefono2->save();
    	$email->save();
    	$twitter->save();
    	$facebook->save();
    	$linkedin->save();
    	$instagram->save();

    	return back()->with('message', 'Información actualizada con éxito');
    }


    public function informacionNosotros()
    {
        $informacion = Info::where('seccion', 'nosotros')->get();
        return view('cms.nosotros')->with(compact('informacion'));
    }


    public function crearInformacionNosotros()
    {
        return view('cms.nosotros.crear_nosotros');
    }

    public function guardarInformacionNosotros(Request $request)
    {
        $file = $request->file('nosotros_imagen');


        $nosotros = new Info;
        $nosotros->atributo = $request->nosotros_title;
        $nosotros->valor = $request->nosotros_atributo;
        $nosotros->valor2 = $request->nosotros_subtitle;
        $nosotros->seccion = 'nosotros';


        if($file){
            $path = public_path() . '/img/nosotros';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $nosotros->imagen = $fileName;
                $nosotros->save();
            }

            return back()->with('message', 'Sección guardada exitosamente!');
            // return back();
        }
    }

    public function actualizarNosotros(Request $request, $id)
    {
        $file = $request->file('nosotros_imagen');
       
        $nosotros = Info::find($id);
        $nosotros->atributo = $request->nosotros_title;
        $nosotros->valor = $request->nosotros_atributo;
        $nosotros->valor2 = $request->nosotros_subtitle;


        if($file){
            if($nosotros->imagen){
                if(substr($nosotros->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/img/nosotros/' . $nosotros->imagen;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $nosotros->imagen === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/img/nosotros';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $nosotros->imagen = $fileName;
                        $nosotros->save();
                    }

                    return back();
                    // return back();
                } else {
                    return back();
                }
            }
        } else {
            $nosotros->save();
            return back();
        }
    }

}
