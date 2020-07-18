<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    
    //guardar mensaje en BD
    public function createMessage(Request $request){
    	$message = new Message;

        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;

    	$message->save();

    	return back()->with('message', 'Tu mensaje ha sido enviado con éxito');
    }

    public function eliminarMensaje($id)
    {
        $message = Message::find($id);
        $message->delete();
        return back()->with('message','Eliminado con éxito');
    }
}
