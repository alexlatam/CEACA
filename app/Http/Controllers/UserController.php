<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = Admin::all();
        return view('cms.crear_usuarios')->with(compact('usuarios'));
    }

    public function crearUsuario(Request $request)
    {
        $user = new Admin;
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->pais = $request->pais;
        // $user->empresa = $request->empresa;
        // $user->plan_id = 1;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('message', 'Creado con éxito');
    }


    public function cambiarContraseña($id)
    {
        $user = Admin::find($id);
        return view('cms.user_admin.user_password')->with(compact('user'));
    }

    public function actualizarContraseña(Request $request)
    {
        $user = Admin::find($request->user_id);
        $new_password = $request->password;

        if ($new_password === $request->password_verify) {
            $user->password = Hash::make($new_password);
            $user->save();
            return redirect('/cms/crear/usuario')->with('message', 'Contraseña actualizada con éxito');
        } else {
            return back()->with('message', 'Las contraseñas deben ser iguales');
        }
    }

    public function deleteUsuario($id)
    {
        $user = Admin::find($id);
        $user->delete();
        return back()->with('message', 'Usuario eliminado con éxito');
    }


    public function getUser($id)
    {
        $user = User::find($id);

        return $user;
    }

    public function changeMembership(Request $request, $id)
    {
        $user = User::find($id);


        if($user)
        {
            $user->plan_id = $request->user_membership;
            $user->save();

            return back()->with('message', 'Membresia de usuario actualizada con éxito');
        }else {
            return back()->with('error', 'Hubo un error en actualizar la membresia');
        }
    }

}
