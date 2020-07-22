<?php

namespace App\Http\Controllers\Capacitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat_capacitacion;
use File;


class CategoriaCapacitacionController extends Controller
{
    public function index()
    {
    	$categorias = Cat_capacitacion::all();
    	return view('cms.cat_capacitacion.cat_capacitacion', compact('categorias'));
    }

    public function crearCategoria(Request $request)
    {
    	    $file = $request->file('category_image');


    		$categoria = new Cat_capacitacion;
    		$categoria->name = $request->category_name;
    	    $categoria->descripcion = $request->category_description;
    		
    	    if($file){
    	        $path = public_path() . '/capacitaciones/categorias';
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
    }

    public function deleteCapacitacionCategory(Request $request, $id){
    	$categoria = Cat_capacitacion::find($id);
        if($categoria->imagen){
                if(substr($categoria->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/capacitaciones/categorias/' . $categoria->imagen;
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
    	$categoria = Cat_capacitacion::find($id);

    	return $categoria;
    }

    public function editCategory(Request $request, $id){

        $file = $request->file('category_image');

    	$categoria = Cat_capacitacion::find($id);
    	$categoria->name = $request->category_name;
        $categoria->descripcion = $request->category_description;
    	
        if($file){
            if($categoria->imagen){
                if(substr($categoria->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/capacitaciones/categorias/' . $categoria->imagen;
                    $deleted = File::delete($fullpath);
                }
            }

            if(isset($deleted) || $categoria->imagen === null){

            //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/capacitaciones/categorias';
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
