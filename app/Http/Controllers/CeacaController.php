<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image_slider;
use App\Service_Category;
class CeacaController extends Controller
{
    public function index(){
    	$categorias = Service_Category::all();
    	$images = Image_slider::all();
    	return view('home')->with(compact('images', 'categorias'));
    }
}
