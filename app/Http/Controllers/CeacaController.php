<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use App\Image_slider;
use App\Home_Slider;
use App\Service_Category;
use App\Service;
use App\Info;
use App\Cat_capacitacion;
use App\Video;
use App\Revista;
class CeacaController extends Controller
{
    public function index(){
		$info = Info::all();
		$videos = Video::where('seccion', 'home')->get();
		$publicidad = Ads::where('seccion', 'home')->get();
		$cat_capacitaciones = Cat_capacitacion::All();
		$categorias = Service_Category::all();
		$servicios = Service::all();
    	$images = Home_Slider::all();
    	$revista = Revista::latest('id')->first();
    	return view('home')->with(compact('info','cat_capacitaciones','images','categorias','servicios','publicidad', 'videos', 'revista'));
    }
}
