<?php

use Illuminate\Support\Facades\Route;
use App\Subscriber;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cms', function() {
	return view('cms.index');
});

Route::get('/cms/subscriptores', function() {
	$subscriptores = Subscriber::all();
	return view('cms.subscriptores')->with(compact('subscriptores'));
});

Route::get('/cms/club', function() {
	$subscriptores = Subscriber::all();
	return view('cms.club')->with(compact('subscriptores'));
});

Route::get('/cms/informacion', function() {
	return view('cms.informacion');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
