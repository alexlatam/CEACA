<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Revista;
use App\Info;
use App\Plan;
use Illuminate\Support\Facades\Hash;


use App\Mail\ChangeMembership;
use Illuminate\Support\Facades\Mail;

class ClubController extends Controller
{
    public function index()
    {
        return view('cms.club_main');
    }
    public function createrClubMember(Request $request)
    {
    }
    /* Crear Usuario de Club y descargar revista*/
    public function crearUsuarioDownload(Request $request)
    {


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

        
        if ($jsonResponse->success === true){
            //confirmo si el correo ya se encuentra ne base de datos
            $email = $request->email;
            if (User::where('email', '=', $email)->exists()) {
            } else {
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->pais = $request->pais;
                $user->empresa = $request->empresa;
                $user->planta = $request->planta;
                $user->cargo = $request->cargo;
                $user->plan_id = 1;
                //$user->password = Hash::make($request->password);
                $user->save();
            }

            //descargar el archivo
            $revista = Revista::all();
            $file = $revista[0]->archivo;
            //$file ='revista_calderas_ceaca.pdf';
            $fileName = basename($file);
            $filePath = 'revista/' . $fileName;
            if (!empty($fileName) && file_exists($filePath)) {
                // Define headers
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=$fileName");
                header("Content-Type: application/zip");
                header("Content-Transfer-Encoding: binary");
                // descargar el archivo
                readfile($filePath);
            }
            return back()->with('band', '1');
        } else {
            // Código para aviso de error
            return back()->with('message',  'Tu mensaje NO ha sido enviado, Se ha detectado como visitante robot' );
        }


    }

    public function pauseClubMember(Request $request, $id)
    {
        $user = User::find($id);
        $user->status = 'inactivo';
        $user->save();

        return back()->with('message', 'Usuario Pausado');
    }

    public function activeClubMember(Request $request, $id)
    {
        $user = User::find($id);
        $user->status = 'activo';
        $user->save();

        return back()->with('message', 'Usuario activado');
    }

    public function membresiasDownload()
    {
        //descargar el archivo
        $file = 'Membresias.pdf';
        $fileName = basename($file);
        $filePath = 'archivos/' . $fileName;
        if (!empty($fileName) && file_exists($filePath)) {
            // Define headers
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$fileName");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");
            // Read the file
            readfile($filePath);
        }
        //$message="Gracias por Suscribirte a nuestro club";
        //$info = Info::all();
        //return view('miembros')->with(compact('info','message'));
        return back()->with('respuesta', 'La descarga ha sido exitosa');
    }


    public function getUserMembership($id)
    {
        $user = User::find($id);

        $membresia = $user->plan->id;

        $membresias = Plan::all();

        return response()->json([
            'user_id' => $user->id,
            'membresia_id' => $membresia,
            'membresias' => $membresias,
        ], 200);
    }

    public function actualizarMembresia(Request $request, $id)
    {
        $user = User::find($id);

        $user->plan_id = $request->membership;
        $user->save();

        return back()->with('message', 'Membresia actualizada con éxito');
    }

    public function solicitudCambioMembresia(Request $request){
        $solicitada = Plan::find($request->membership)->title;
        
        $user = auth()->user();

        $actual = $user->plan->title;

        Mail::to('club@ceaca')->send(new ChangeMembership($user, $solicitada, $actual));

        return back()->with('message', '¡Solicitud para cambio de membresía realizada con éxito!');

    }
}
