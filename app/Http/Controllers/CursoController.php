<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Plan;
use File;

class CursoController extends Controller
{
    public function index(){
    	return view('cms.cursos_main');
    }

    public function cursosHome(){
        $cursos = Course::all();
        return view('cms.cursos')->with(compact('cursos'));
    }

    public function crearCurso(){
        $membresias = Plan::all();
    	return view('cms.cursos.crear_curso')->with(compact('membresias'));;
    }

    public function guardarCurso(Request $request){
    	$file = $request->file('imagen_curso');

    	$curso = new Course;
    	$curso->titulo = $request->titulo_curso;
    	$curso->descripcion =$request->descripcion_curso;
        $curso->plan_id =$request->plan_curso;
        //$curso->course_category_id =$request->categoria_curso;

         //verificamos que la imagen exista
        if($file){
            $path = public_path() . '/cursos/imagenes';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $curso->imagen = $fileName;
                $curso->save();
            }

            return back()->with('message', 'Curso guardado correctamente');

        }	 else {
            return back()->with('message', 'no se pudo guardar imagen');
        }
    }

    public function editarCurso(Request $request, $id){
    	$curso = Course::find($id);
        $membresias = Plan::all();
        return view('cms.cursos.editar_curso')->with(compact('curso', 'membresias'));
    }

    public function actualizarCurso(Request $request, $id){
    	$curso = Course::find($id);

        $file = $request->file('imagen_curso');

    	$curso->titulo = $request->titulo_curso;
        $curso->descripcion =$request->descripcion_curso;
        $curso->plan_id =$request->plan_curso;

        if($file)
        {
            if($curso->imagen){
                if(substr($curso->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/cursos/imagenes/' . $curso->imagen;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $curso->imagen === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/cursos_imagen';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $curso->imagen = $fileName;
                        $curso->save();
                    }

                    return back()->with('message','Curso actualizado con éxito');
                    // return back();
                } else {
                    return back()->with('message','No se pudo actualizar la imagen con éxito');
                }
            }
        } else {
            $curso->save();
            return back()->with('message', 'Curso actualizado correctamente');
        }

    	
    }


    public function eliminarCurso(Request $request, $id){
    	$curso = Course::find($id);
        if($curso->imagen){
                if(substr($curso->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/cursos/imagenes/' . $curso->imagen;
                    $deleted = File::delete($fullpath);
                }
        }

        if(isset($deleted) || $curso->imagen === null){
           $curso->delete();
           return back()->with('message','Curso eliminado con éxito');
        }else {
            return back()->with('message','No se pudo eliminar el Curso');
        }

        return back();
    }
}
