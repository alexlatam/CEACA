<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recurso_Curso;
use App\Course;


class RecursosCursosController extends Controller
{
    public function index()
    {
    	$recursos = Recurso_Curso::all();
    	return view('cms.cursos_recursos.index', compact('recursos'));
    }


    public function crearRecurso()
    {	
    	$cursos = Course::all();
    	return view('cms.cursos_recursos.crear_recurso', compact('cursos'));
    }

    //GUARDAR RECURSO

    public function guardarRecurso(Request $request)
    {	


    	$file = $request->file('recurso_file');

    	$recurso = new Recurso_Curso;

    	$recurso->titulo = $request->recurso_title;
    	$recurso->descripcion = $request->recurso_descripcion;
    	$recurso->precio = 180000;
    	$recurso->course_id = $request->recurso_curso_id;
    	
    	if($file){
    	    $path = public_path() . '/cursos/recursos';
    	    $fileName = uniqid() . $file->getClientOriginalName();
    	    $moved = $file->move($path, $fileName);

    	    //verificamos que la imagen haya sido movida y guardamos la ruta
    	    if($moved){
    	        $recurso->recurso = $fileName;
    	        $recurso->save();
    	        
    	        
    	    }

    	    return back()->with('message', 'Recurso guardado correctamente');

    	} else {
    		$recurso->save();
            return back()->with('message', 'Recurso guardado correctamente');
    	}

    }

    public function editarRecurso ($id){
        $recurso = Recurso_Curso::find($id);
        $membresias = Plan::all();
        return view('cms.recursos.editar_recurso', compact('recurso', 'membresias'));
    }



    // ACTUALIZAR RECURSO

    public function actualizarRecurso(Request $request, $id)
    {
        $file = $request->file('recurso_file');
        
        $recurso = Recurso_Curso::find($id);

        $recurso->titulo = $request->recurso_title;
        $recurso->descripcion = $request->recurso_descripcion;
        $recurso->course_id = $request->recurso_curso_id;
        if($file){
            if($recurso->recurso){
                $fullpath = public_path() . '/cursos/recursos/' . $recurso->recurso;
                $deleted = File::delete($fullpath);
            }

            if(isset($deleted) || $recurso->recurso === null){

                //verificamos que el archivo exista
                if($file){
                    $path = public_path() . '/cursos/recursos';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que el archivo haya sido movido y guardamos la ruta
                    if($moved){
                        $recurso->recurso = $fileName;
                        $recurso->save();

                        return back()->with('message', 'Recurso actualizado con éxito!');
                    }else {
                        return back()->with('error', 'No se pudo actualizar el recurso');
                    }
                }
            }
                
        } else {
            $recurso->save();
            
            return back()->with('message', 'Recurso actualizado con éxito!');
        }

    }

    // public function descargarRecurso($id)
    // {
    //     $recurso = Resource::find($id);

    //     $path = public_path() . '/recursos/' . $recurso->recurso;

    //     return response()->download($path);
    // }

    public function obtenerRecurso($id)
    {
        $recurso = Recurso_Curso::find($id);

        return $recurso;
    }


    // ELIMINAR RECURSO


    public function eliminarRecurso($id)
    {
        $recurso = Recurso_Curso::find($id);
        if($recurso->recurso){
            $fullpath = public_path() . '/cursos/recursos/' . $recurso->recurso;
            $deleted = File::delete($fullpath);
        }

        if(isset($deleted) || $recurso->recurso === null)
        {
            $recurso->delete();
            return back()->with('error', 'Recurso eliminado correctamente');
        } else {
            return back()->with('error', 'No se pudo eliminar el recurso');
        }
    }
}
