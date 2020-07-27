<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use App\Image_slider;
use App\Service_Category;
use App\Service;
use App\Info;
class CeacaController extends Controller
{
    public function index(){
		$info = Info::all();
		$publicidad = Ads::where('seccion', 'home')->get();
		$categorias = Service_Category::all();
		$servicios = Service::all();
    	$images = Image_slider::all();
    	return view('home')->with(compact('info','images','categorias','servicios','publicidad'));
    }
}
