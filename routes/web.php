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

/* ----------------------------  RUTAS DE PRUEBA PARA EL CMS -----------------------*/ 
Route::get('/cms', 'CmsController@index');
Route::get('/cms/subscriptores', 'CmsController@subscribersView' );
Route::get('/cms/club', 'CmsController@clubView');
Route::get('/cms/categorias', 'CmsController@categoryView');
Route::get('/cms/informacion', 'CmsController@informationView');

	/* ----------  RUTA CLUB CONTROLLADOR ---------*/ 
Route::post('/club/user/pause/{id}', 'ClubController@pauseClubMember');
Route::post('/club/user/active/{id}', 'ClubController@activeClubMember');


Route::post('cms/categoria/create', 'CategoryController@createCategory');
Route::post('cms/categoria/delete/{id}', 'CategoryController@deleteCategory');

/*------------------------------------ END --------------------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



