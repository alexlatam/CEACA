<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image_slider;
class CeacaController extends Controller
{
    public function index(){

    	return view('home');
    }
}
