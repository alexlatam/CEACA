<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Info;
use Hash;

class RegisterController extends Controller
{
    public function registerForm()
    {	

    	if(auth()->user()){
    		return redirect('/');
    	}
        $info = Info::All();
    	return view('auth.registro', compact('info'));
    }

    public function registrar(Request $request)
    {
    	$user = new User;

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->pais = $request->pais;
    	$user->empresa = $request->empresa;
    	$user->planta  = $request->planta;
    	$user->cargo = $request->cargo;

    	if($request->password === $request->password_confirmation){
    		$user->password = Hash::make($request->password);
    		$user->save();

    		return redirect('/sesion')->with('message', 'Te has registrado con éxito, puedes iniciar sesión');
    	}else{ 
    		return back()->with('error', 'Las contraseñas no coinciden');
    	}
    }
}
