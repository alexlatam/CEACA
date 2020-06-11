<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Category;
use File;

class CursoController extends Controller
{
    public function index(){
    	$cursos = Curso::all();
    	return view('cms.cursos')->with(compact('cursos'));
    }

    public function crearCurso(){

    	return view('cms.cursos.crear_curso');
    }

    public function guardarCurso(Request $request){
    	$file = $request->file('imagen_curso');

    	$curso = new Curso;
    	$curso->titulo = $request->titulo_curso;
    	$curso->descripcion =$request->descripcion_curso;

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

            return back()->with('message', 'Curso guardado correctamente');

        }	 else {
            return back()->with('message', 'no se pudo guardar imagen');
        }
    }

    public function editarCurso(Request $request, $id){
    	$curso = Curso::find($id);

        return view('cms.cursos.editar_curso')->with(compact('curso'));
    }

    public function actualizarCurso(Request $request, $id){
    	$curso = Curso::find($id);

    	$curso->titulo = $request->titulo_curso;
    	$curso->descripcion =$request->descripcion_curso;
    	$curso->save();

    	return back()->with('message', 'Curso actualizado correctamente');
    }

    public function actualizarImagenCurso(Request $request, $id){
    	$file = $request->file('imagen_curso');
        $curso = Curso::find($id);

        if($curso->imagen){
            if(substr($curso->imagen, 0, 4)  === "http"){
                $deleted = true;
            } else {
                $fullpath = public_path() . '/cursos_imagen/' . $curso->imagen;
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

                return back()->with('message','Imagen actualizada con éxito');
                // return back();
            } else {
                return back()->with('message','No se pudo actualizar la imagen con éxito');
            }
        }
    }

    public function eliminarCurso(Request $request, $id){
    	$curso = Curso::find($id);

    	$curso->delete();

    	return back()->with('message','Curso eliminado con éxito');
    }
}
