<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image_slider;
class CeacaController extends Controller
{
    public function index(){

    	$sliders = Image_slider::all();
    	return view('ceaca.index')->with(compact('sliders'));
    }
}
