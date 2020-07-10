<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use File;

class PlanController extends Controller
{
    //
    public function createPlan(Request $request){
        $file = $request->file('plan_image');


    	$plan = new Plan;
    	$plan->title = $request->plan_name;
        $plan->description = $request->plan_description;
        $plan->monto = $request->plan_monto;
    	
        if($file){
            $path = public_path() . '/img/membresias/';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            //verificamos que la imagen haya sido movida y guardamos la ruta
            if($moved){
                $plan->imagen = $fileName;
                $plan->save();
            }

            return back()->with('message', 'Membresía creada exitosamente');

        } else {
            return back()->with('message', 'No se pudo crear la membresía, intentelo nuevamente');
        }

    	return back();
    }

    public function updatePlan(Request $request, $id){
        $file = $request->file('imagen_plan');

        $plan = Plan::find($id);

        $plan->title = $request->title_plan;
        $plan->monto = $request->monto_plan; 
        $plan->description =$request->description_plan;
        
        if($file){

            if($plan->imagen){
                if(substr($plan->imagen, 0, 4)  === "http"){
                    $deleted = true;
                } else {
                    $fullpath = public_path() . '/img/membresias/' . $plan->imagen;
                    $deleted = File::delete($fullpath);
                }
            }
            
            //verificacion de que se haya eliminado la imagen o que no exista el en el campo
            if(isset($deleted) || $plan->imagen === null){

                //verificamos que la imagen exista
                if($file){
                    $path = public_path() . '/img/membresias/';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que la imagen haya sido movida y guardamos la ruta
                    if($moved){
                        $plan->imagen = $fileName;
                        $plan->save();
                    }

                    return back()->with('message','Membresía actualizada con éxito');
                    // return back();
                } else {
                    return back()->with('message','No se pudo actualizar la membresía con éxito');
                }
            }
        } else {
            $plan->save();
            return back()->with('message','Membresía actualizada con éxito');
        }

        
    }
    
}
