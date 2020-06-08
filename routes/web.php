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


Route::get('/test', function() {
	$subscriptores = Subscriber::all();
	return view('index')->with(compact('subscriptores'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
