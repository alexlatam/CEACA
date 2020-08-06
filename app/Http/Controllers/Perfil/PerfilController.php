<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Info;
use App\Plan;
use App\Cat_capacitacion;
use App\Resource;
use App\Faq_topic;
use App\Faq;

class PerfilController extends Controller
{
    public function home()
    {	
        $user = auth()->user();

        $checkboxs = explode(',', $user->sector);

        $info = Info::all();
        $cat_capacitaciones = Cat_capacitacion::All();
    	return view('perfil.index', compact('info', 'user', 'checkboxs', 'cat_capacitaciones'));
    }

    public function membresias()
    {	
    	$info = Info::all();
        $planes = Plan::all();
        $cat_capacitaciones = Cat_capacitacion::All();
    	return view('perfil.membresia', compact('info', 'planes', 'cat_capacitaciones'));
    }

    public function recursos()
    {
    	$info = Info::all();
        $recursos = Resource::all();
        $cat_capacitaciones = Cat_capacitacion::All();
    	return view('perfil.recursos', compact('info', 'recursos', 'cat_capacitaciones'));
    }

    public function faq()
    {
        $info = Info::all();
        $topicos = Faq_topic::all();
        $cat_capacitaciones = Cat_capacitacion::All();
    	return view('perfil.faq', compact('info','topicos', 'cat_capacitaciones'));
    }

    public function faq_topico($id)
    {
        $topico = Faq_topic::find($id);
        if (isset($topico->id)){
            $info = Info::all();
            $cat_capacitaciones = Cat_capacitacion::All();
            $faqs= Faq::where('faq_topic_id', $id)->get();
            return view('perfil.faq_topicos', compact('info','topico','faqs', 'cat_capacitaciones'));
        }else{
           return redirect()->route('faq');
        }
    }

    
}
