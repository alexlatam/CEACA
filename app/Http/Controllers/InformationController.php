<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

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

}
