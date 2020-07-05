<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('cms.crear_usuarios')->with(compact('usuarios'));
    }

    public function crearUsuario(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->pais = $request->pais;
        $user->empresa = $request->empresa;
        $user->plan_id = 1;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('message', 'Creado con éxito');
    }
    /* Crear Usuario de Club y descargar revista*/
    public function crearUsuarioDownload(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->pais = $request->pais;
        $user->empresa = $request->empresa;
        $user->plan_id = 1;
        $user->password = Hash::make($request->password);
        $user->save();
        //descargar el archivo
        $fileName = basename('fichero.txt');
        $filePath = 'revista/' . $fileName;
        if (!empty($fileName) && file_exists($filePath)) {
            // Define headers
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$fileName");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");

            // Read the file
            readfile($filePath);
            exit;
        }

        return back()->with('band', '1');
    }

    public function cambiarContraseña($id)
    {
        $user = User::find($id);
        return view('cms.user_admin.user_password')->with(compact('user'));
    }

    public function actualizarContraseña(Request $request)
    {
        $user = User::find($request->user_id);
        $new_password = $request->password;

        if ($new_password === $request->password_verify) {
            $user->password = Hash::make($new_password);
            $user->save();
            return redirect('/cms/crear/usuario')->with('message', 'Contraseña actualizada con éxito');
        } else {
            return back()->with('message', 'Las contraseñas deben ser iguales');
        }
    }
}
