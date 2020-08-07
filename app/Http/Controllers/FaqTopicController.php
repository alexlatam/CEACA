<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq_topic;

class FaqTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq_topics  = Faq_topic::All();
        return view('cms.faq_topic.index')->with(compact('faq_topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.faq_topic.crear_faq_topic');
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
        $topico = new Faq_topic;
        $topico->topico = $request->topico;
        $topico->save(); 

        $message = "Se ha almacenado el tópico \"".$topico->topico. "\", Puede continuar agregando más tópicos." ;
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topico = Faq_topic::find($id);
        return view('cms.faq_topic.crear_faq_topic')->with(compact('topico'));
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
    //    return $request;
       $topico = Faq_topic::find($id);
       $topico->topico = $request->topico;
       $topico->save(); 

       $message = "Se ha actualizado el tópico a \"".$topico->topico. "\"" ;
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
        $topico = Faq_topic::find($id);
        $topico->delete();

        $message = "Se ha eliminado exitosamente el tópico" ;
        return back()->with(compact('message'));
    }
}
