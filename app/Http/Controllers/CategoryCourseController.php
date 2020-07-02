<?php

namespace App\Http\Controllers;

use App\Course_Category;
use Illuminate\Http\Request;
use File;

class CategoryCourseController extends Controller
{
    public function index()
    {
    	$categorias = Course_Category::all();

    	return view('cms.categorias_cursos')->with(compact('categorias'));
    }


    public function guardarCategoria(Request $request)
    {
    	$file = $request->file('category_image');

    	$categoria = new Course_Category;
    	$categoria->titulo = $request->category_name;
    	$categoria->descripcion = $request->category_description;

    	if($file){
            $path = public_path() . '/categorias_cursos_imagen';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $categoria->imagen = $fileName;
                $categoria->save();
            }

            return back()->with('message', 'Categoría guardada correctamente');

        } else {
            return back()->with('message', 'no se pudo guardar imagen');
        }

    	return back();
    }

    public function obtenerCategoriaCurso(Request $request, $id)
    {
    	$categoria = Course_Category::find($id);

    	return $categoria;
    }

    public function editarCategoriaCurso(Request $request, $id)
    {
    	$file = $request->file('category_image');

    	$categoria = Course_Category::find($id);
    	$categoria->titulo = $request->category_name;
        $categoria->descripcion = $request->category_description;
    	
        if($file){
            if($categoria->imagen){
                if(substr($categoria->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/categorias_cursos_imagen/' . $categoria->imagen;
                    $deleted = File::delete($fullpath);
                }
            }

            if(isset($deleted) || $categoria->imagen === null){

            //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/categorias_cursos_imagen';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);

                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $categoria->imagen = $fileName;
                        $categoria->save();
                    }

                    return back()->with('message','Categoria actualizada con éxito');
                    // return back();
                } else {
                    return back()->with('message','No se pudo actualizar la imagen con éxito');
                }
            }

        } else {
            $categoria->save();
            return back()->with('message', 'Categoria actualizada con éxito');
        }
    }

    public function eliminarCategoriaCurso(Request $request, $id)
    {
    	$categoria = Course_Category::find($id);
        if($categoria->imagen){
                if(substr($categoria->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/categorias_cursos_imagen/' . $categoria->imagen;
                    $deleted = File::delete($fullpath);
                }
        }

        if(isset($deleted) || $categoria->imagen === null){
    	   $categoria->delete();
           return back()->with('message','Categoria eliminada con éxito');
        }else {
            return back()->with('message','No se pudo eliminar la categoría');
        }

    	return back();
    }
}
