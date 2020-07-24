<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Info;

use Hash;
use Auth;
class LoginController extends Controller
{
    public function index()
    {   
        $info = Info::All();
    	return view('auth.sesion', compact('info'));
    }

    public function login(Request $request)
    {
    	
    	if($request->wantsJson()) {

    		$user = User::where('email', $request->email)->first();
    		$password = $request->password;

    		//creacion de contraseña
    		$new_password = $request->new_password;
    		$password_confirm = $request->password_verify;

    		//verificacion de usuario existente
    		if($user)
    		{	


    			//confirmacion de que cuenta contraseña o no
    			if($user->password){

    				if(Hash::check($password, $user->password))
    				{	
    					Auth::login($user, true);
    					return response('sesion iniciada', 200);
    				}else {
                        return response(null, 204);
                    }

    				
    			} elseif ($user->password === null) {
    				
    				//en caso de no existir el request se envia un 202 para cambiar el form
    				if(isset($password_confirm)){
    					//confirmacion de creacion de contraseña y guardado
    					if($new_password === $password_confirm){

    						$user->password = Hash::make($new_password);
    						$user->save();

                            Auth::login($user, true);
    						return response()->json([
    							'message' => 'cotraseña creada con éxito'
    						], 200);

    					} else {
    						return response()->json([
    							'err' => 'las contraseñas no coinciden'
    						], 204);
    					}

    				}

    				return response(null, 202);
    			}

    			return response()->json([
    				'email' => $user,
    			]);


    		} else {
    			return response()->json([],204);
    		}


    	} else {
    		return back();
    	}


    	
    }
}
