<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ClubController extends Controller
{
    public function createrClubMember(Request $request){

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
