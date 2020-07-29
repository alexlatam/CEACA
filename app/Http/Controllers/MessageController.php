<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

use App\Mail\UserCreated;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    
    //guardar mensaje en BD
    public function createMessage(Request $request){
    	$message = new Message;

        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;

    	$message->save();

        Mail::to('test@example.com')->send(new UserCreated($message));

    	return back()->with('message', 'Tu mensaje ha sido enviado con éxito');
    }

    public function eliminarMensaje($id)
    {
        $message = Message::find($id);
        $message->delete();
        return back()->with('message','Eliminado con éxito');
    }
}
