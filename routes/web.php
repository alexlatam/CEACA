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

Route::middleware('auth')->group(function () {

	Route::get('/cms', 'CmsController@index');
	Route::get('/cms/subscriptores', 'CmsController@subscribersView' );
	Route::get('/cms/club', 'CmsController@clubView');
	Route::get('/cms/categorias', 'CmsController@categoryView');
	Route::get('/cms/informacion', 'CmsController@informationView');
	Route::get('/cms/servicios', 'ServicioController@index');
	Route::get('/cms/publicidades', 'PublicidadController@index');
	Route::get('/cms/crear/usuario', 'UserController@index');

		/* ----------  RUTA USUARIOS CONTROLLADOR ---------*/ 
	Route::post('cms/guardar/usuario', 'UserController@crearUsuario');
		/* ----------  RUTA CLUB CONTROLLADOR ---------*/ 
	Route::post('/club/user/pause/{id}', 'ClubController@pauseClubMember');
	Route::post('/club/user/active/{id}', 'ClubController@activeClubMember');

		/* ----------  RUTA CATEGORIAS CONTROLLADOR ---------*/ 
	Route::get('cms/categoria/{id}', 'CategoryController@getCategory');
	Route::post('cms/categoria/create', 'CategoryController@createCategory');
	Route::post('cms/categoria/edit/{id}', 'CategoryController@editCategory');
	Route::post('cms/categoria/delete/{id}', 'CategoryController@deleteCategory');

		/* ----------  RUTA SERVICIOS CONTROLLADOR ---------*/ 
	Route::get('/cms/editar/servicio/{id}', 'ServicioController@editarServicio');
	Route::post('/cms/actualizar/servicio/{id}', 'ServicioController@actualizarServicio');
	Route::post('/cms/actualizar/imagen/servicio/{id}', 'ServicioController@actualizarImagenServicio');
	Route::get('/cms/crear/servicios', 'ServicioController@crearServicio');
	Route::post('/cms/guardar/servicio', 'ServicioController@guardarServicio');
	Route::post('/cms/eliminar/servicio/{id}', 'ServicioController@eliminarServicio');

		/* ----------  RUTA PUBLICIDADES CONTROLLADOR ---------*/ 
	Route::get('/cms/crear/publicidad', 'PublicidadController@crearPublicidad');
	Route::post('/cms/guardar/publicidad', 'PublicidadController@guardarPublicidad');
	Route::post('/cms/actualizar/publicidad/{id}', 'PublicidadController@actualizarPublicidad');
	Route::post('/cms/actualizar/imagen/publicidad/{id}', 'PublicidadController@actualizarImagenPublicidad');
});

/*------------------------------------ END --------------------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



