<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Hash;

class RegisterController extends Controller
{
    public function registerForm()
    {	

    	if(auth()->user()){
    		return redirect('/');
    	}

    	return view('auth.registro');
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

    		return redirect('/sesion');
    	}else{ 
    		return back();
    	}
    }
}
