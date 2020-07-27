<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Info;
use App\Plan;
use App\Cat_capacitacion;
use Hash;

class RegisterController extends Controller
{
    public function registerForm($name = '')
    {

    	if(auth()->user()){
    		return redirect('/');
    	}
        $info = Info::All();
        $membresias = Plan::all();
        $cat_capacitaciones = Cat_capacitacion::All();
        $actual = $name;

        return view('auth.registro', compact('info', 'membresias', 'actual' ,'cat_capacitaciones'));

    	
    }

    public function registrar(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        $sectores = $request->get('sector');

        $sector_main = '';

        foreach ($sectores as $sector){
            $s = ',';
            if($sector_main == ''){
                $sector_main = $sector;
            }else {
                $sector_main .= $s.$sector;
            }
        }

    	if($user && $user->password != null)
        {
            return back()->with('error', 'Este correo ya se encuentra en uso');

        }elseif ($user && $user->password === null) {
            
            $user->name = $request->name;
            $user->email = $request->email;
            $user->pais = $request->pais;
            $user->empresa = $request->empresa;
            $user->planta  = $request->planta;
            $user->cargo = $request->cargo;
            $user->tipo_caldera = $request->tipo_caldera;
            $user->actividad = $request->actividad;
            $user->especialidad = $request->especialidad;
            $user->sector = $sector_main;

            $user->plan_id = $request->membership;

            if($request->password === $request->password_confirmation){
                $user->password = Hash::make($request->password);
                $user->save();

                return redirect('/sesion')->with('message', 'Te has registrado con éxito, puedes iniciar sesión');
            }else{ 
                return back()->with('error', 'Las contraseñas no coinciden');
            }

        }else {
            $user = new User;
            
            $user->name = $request->name;
            $user->email = $request->email;
            $user->pais = $request->pais;
            $user->empresa = $request->empresa;
            $user->planta  = $request->planta;
            $user->cargo = $request->cargo;
            $user->tipo_caldera = $request->tipo_caldera;
            $user->actividad = $request->actividad;
            $user->especialidad = $request->especialidad;
            $user->sector = $sector_main;

            $user->plan_id = $request->membership;

            if($request->password === $request->password_confirmation){
                $user->password = Hash::make($request->password);
                $user->save();

                return redirect('/sesion')->with('message', 'Te has registrado con éxito, puedes iniciar sesión');
            }else{ 
                return back()->with('error', 'Las contraseñas no coinciden');
            }
        }
    }
}
