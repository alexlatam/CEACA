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

            // recaptcha
            $recaptcha_secret = "6LcnwLIZAAAAAFUSyNHCfNfwK45uIQnhsCgViTog";
            $recaptcha_response =  $request->input('g-recaptcha-response');
            $recaptcha_url= "https://www.google.com/recaptcha/api/siteverify";
        
            $post_data = "secret=".$recaptcha_secret."&response=".$recaptcha_response."&remoteip=".$_SERVER['REMOTE_ADDR'] ;
        
        
            $ch = curl_init(); 
            
            curl_setopt($ch, CURLOPT_URL, $recaptcha_url );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=utf-8', 'Content-Length: ' . strlen($post_data)));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        
            $response = curl_exec($ch); 
            curl_close($ch);
        
        
            $jsonResponse = json_decode($response);
            if ($jsonResponse->success === true) { 
            // Código para procesar el formulario
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
        } else {
        // Código para aviso de error
        return back()->with('error', 'Se ha detectado como visitante robot, ¡vuelva a intentarlo!');
        }
    }
}
