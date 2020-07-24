<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_Category;
use File;

class CategoryController extends Controller
{
    public function createCategory(Request $request){
        $file = $request->file('category_image');


    	$categoria = new Service_Category;
    	$categoria->name = $request->category_name;
        $categoria->descripcion = $request->category_description;
    	
        if($file){
            $path = public_path() . '/categorias_imagen';
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

    public function deleteCategory(Request $request, $id){
    	$categoria = Service_Category::find($id);
        if($categoria->imagen){
                if(substr($categoria->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/categorias_imagen/' . $categoria->imagen;
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

    public function getCategory(Request $request, $id){
    	$categoria = Service_Category::find($id);

    	return $categoria;
    }

    public function editCategory(Request $request, $id){

        $file = $request->file('category_image');

    	$categoria = Service_Category::find($id);
    	$categoria->name = $request->category_name;
        $categoria->descripcion = $request->category_description;
    	
        if($file){
            if($categoria->imagen){
                if(substr($categoria->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/categorias_imagen/' . $categoria->imagen;
                    $deleted = File::delete($fullpath);
                }
            }

            if(isset($deleted) || $categoria->imagen === null){

            //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/categorias_imagen';
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
}
