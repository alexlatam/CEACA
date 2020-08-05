<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Faq_topic;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs  = Faq::All();
        return view('cms.faq.index')->with(compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topicos  = Faq_topic::All();
        return view('cms.faq.crear_faq', compact('topicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // vars
        $titulo = $request->input('titulo');
        $topico = $request->input('topico');
        $contenido = $request->input('contenido');

        $faq = new Faq;
        $faq->titulo = $titulo;
        $faq->faq_topic_id = $topico;
        $faq->cuerpo = $contenido;

        $faq->save();
        $message = "Se ha registrado una FAQ de manera exitosa, titulada \"". $faq->titulo ."\".";
        return back()->with(compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topicos  = Faq_topic::All();
        $faq = Faq::find($id);
        return view('cms.faq.crear_faq', compact('topicos', 'faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;  
        // vars
          $titulo = $request->input('titulo');
          $topico = $request->input('topico');
          $contenido = $request->input('contenido');
  
          $faq = Faq::find($id);
          $faq->titulo = $titulo;
          $faq->faq_topic_id = $topico;
          $faq->cuerpo = $contenido;
  
          $faq->save();
          $message = "Se ha actualizado de manera exitosa, La faq titulada \"". $faq->titulo ."\".";
          return back()->with(compact('message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
