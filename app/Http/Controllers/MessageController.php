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
        // código para procesar los campos y enviar el form
        //Guardar mensaje   
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        return back()->with('message', 'Tu mensaje ha sido enviado con éxito');

        } else {
        // Código para aviso de error
        return back()->with('message',  'Tu mensaje NO ha sido enviado, Se ha detectado como visitante robot' );
        }


        Mail::to('contacto@ceaca.com')->send(new UserCreated($message));

    	return back()->with('message', 'Tu mensaje ha sido enviado con éxito');

    }

    public function eliminarMensaje($id)
    {
        $message = Message::find($id);
        $message->delete();
        return back()->with('message','Eliminado con éxito');
    }
}
