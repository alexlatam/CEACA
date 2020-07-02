<?php

namespace App\Http\Controllers;

use App\Service_Request;
use Illuminate\Http\Request;

class ServiceRequestsController extends Controller
{
    public function index()
    {
    	$requests = Service_Request::all();

    	return view('cms.service_requests')->with(compact('requests'));
    }

    public function crearServicioRequest()
    {
    	
    }
}
