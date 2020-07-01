<?php

namespace App\Http\Controllers;

use App\Course_Request;
use Illuminate\Http\Request;

class CursosRequestsController extends Controller
{
    public function index()
    {
    	$requests = Course_Request::all();

    	return view('cms.cursos_requests')->with(compact('requests'));
    }
}
