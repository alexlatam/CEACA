<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
    	return view('cms.crear_usuarios')->with(compact('usuarios'));
    }

    public function crearUsuario(Request $request){
    	$user = new User;
    	$user->name = $request->name;
    	$user->email= $request->email;
        $user->plan_id = 1;
    	$user->password = Hash::make($request->password);
    	$user->save();

    	return back()->with('message','Creado con éxito');
    }

    public function cambiarContraseña($id){
        $user = User::find($id);
        return view('cms.user_admin.user_password')->with(compact('user'));
    }

    public function actualizarContraseña(Request $request)
    {
        $user = User::find($request->user_id);
        $new_password = $request->password;

        if($new_password === $request->password_verify){
            $user->password = Hash::make($new_password);
            $user->save();
            return redirect('/cms/crear/usuario')->with('message', 'Contraseña actualizada con éxito');
        } else {
            return back()->with('message', 'Las contraseñas deben ser iguales');
        }
    }
}
