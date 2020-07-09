<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class ClubController extends Controller
{
	public function index(){
		return view('cms.club_main');
    }
    public function createrClubMember(Request $request){

	}
	/* Crear Usuario de Club y descargar revista*/
    public function crearUsuarioDownload(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->pais = $request->pais;
        $user->empresa = $request->empresa;
        // $user->plan_id = 1;
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

    public function pauseClubMember(Request $request, $id){
    	$user = User::find($id);
    	$user->status = 'inactivo';
    	$user->save();

    	return back();
    }

    public function activeClubMember(Request $request, $id){
    	$user = User::find($id);
    	$user->status = 'activo';
    	$user->save();

    	return back();
    }
}
