<?php

use Illuminate\Support\Facades\Route;
use App\Subscriber;
use App\Image_slider;
use App\Ads;
use App\Service;
use App\Service_Category;
use App\Info;
use App\Plan;
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

/* HOME */

Route::get('/', 'CeacaController@index')->name('home');

/* NOSOTROS */
Route::get('/nosotros', function () {
	$publicidad = Ads::All();
	$nosotros_array = Info::All();
	$info = Info::All();
	$servicios = Service::All();
	$cat_servicios = Service_Category::All();
	return view('nosotros', [
		"info" => $info,
		"nosotros_array" => $nosotros_array,
		"servicios" => $servicios,
		"cat_servicios" => $cat_servicios,
		"publicidad" => $publicidad
	]);
})->name('nosotros');
/* CLUB */
Route::get('/club', function () {
	$info = Info::All();
	$membresias = Plan::All();
	$servicios = Service::All();
	$cat_servicios = Service_Category::All();
	$publicidad = Ads::All();
	return view('club', [
		"info" => $info,
		"servicios" => $servicios,
		"cat_servicios" => $cat_servicios,
		"publicidad" => $publicidad,
		"membresias" => $membresias
	]);
})->name('club');
/* SERVICIOS */
Route::get('/servicios', function () {
	$info = Info::All();
	$servicios = Service::All();
	$cat_servicios = Service_Category::All();
	$publicidad = Ads::All();
	return view('servicios', [
		"info" => $info,
		"servicios" => $servicios,
		"cat_servicios" => $cat_servicios,
		"publicidad" => $publicidad
	]);
})->name('servicios');

Route::get('/detalles_servicio/{id}', function ($id) {
	$info = Info::All();
	$servicios = Service::All();
	$servicio = Service::find($id);
	$publicidad = Ads::All();
	return view('detalles_servicio', ["info" => $info, "servicios" => $servicios, "servicio" => $servicio, "publicidad" => $publicidad]);
})->name('detalles_servicio');

/* REVITA */
Route::get('/revistas', 'RevistaController@revistaHome')->name('revistas');
Route::get('/descargar/revista/{id}', 'RevistaController@descargarRevistas');


/* CONTACTO */
Route::get('/contacto', 'InformationController@contactoView')->name('contacto');
Route::post('/enviar/mensaje', 'MessageController@createMessage');

/* SUSCRIBIRSE Y DESCARGAR REVISTA */
Route::post('/user/createmagazine/','ClubController@crearUsuarioDownload');

/* Descargar Membresias */
Route::get('/download/membresias', 'ClubController@membresiasDownload');

/* ----------------------------  RUTAS DE PRUEBA PARA EL CMS -----------------------*/

Route::middleware('admin')->group(function () {

	Route::get('/cms', 'CmsController@index');
	Route::get('/cms/subscriptores', 'CmsController@subscribersView');
	Route::get('/cms/club', 'ClubController@index');
	Route::get('/cms/categorias', 'CmsController@categoryView');
	Route::get('/cms/informacion', 'InformationController@index');
	Route::get('/cms/servicios', 'ServicioController@index');
	Route::get('/cms/publicidades', 'PublicidadController@index');
	Route::get('/cms/cursos', 'CursoController@index');
	Route::get('/cms/slider/image', 'SliderImageController@index');
	Route::get('/cms/crear/usuario', 'UserController@index');
	Route::get('/cms/mensajes', 'CmsController@mensajesView');

	/* ----------  RUTA USUARIOS CONTROLLADOR ---------*/
	Route::post('cms/guardar/usuario', 'UserController@crearUsuario');
	Route::get('cms/password/usuario/{id}', 'UserController@cambiarContraseña');
	Route::post('cms/actualizar/password/usuario', 'UserController@actualizarContraseña');
	Route::post('cms/delete/usuario/{id}', 'UserController@deleteUsuario');

	/* ----------  RUTA CLUB CONTROLLADOR ---------*/
	Route::get('/cms/miembros', 'CmsController@clubView');
	Route::post('/club/user/pause/{id}', 'ClubController@pauseClubMember');
	Route::post('/club/user/active/{id}', 'ClubController@activeClubMember');
	
	/* ----------  RUTA MEMBRESIAS-CLUB CONTROLLADOR ---------*/
	Route::get('/cms/membresias', 'CmsController@membresiasView');
	Route::post('cms/membresia/create', 'PlanController@createPlan');
	Route::post('cms/membresia/update/{id}', 'PlanController@updatePlan');

	/* ----------  RUTA CATEGORIAS SERVICIOS CONTROLLADOR ---------*/
	Route::get('cms/categoria/{id}', 'CategoryController@getCategory');
	Route::post('cms/categoria/create', 'CategoryController@createCategory');
	Route::post('cms/categoria/edit/{id}', 'CategoryController@editCategory');
	Route::post('cms/categoria/delete/{id}', 'CategoryController@deleteCategory');

	/* ----------  RUTA SERVICIOS CONTROLLADOR ---------*/
	Route::get('/cms/servicios/tecnicos', 'ServicioController@serviciosHome');
	Route::get('/cms/editar/servicio/{id}', 'ServicioController@editarServicio');
	Route::post('/cms/actualizar/servicio/{id}', 'ServicioController@actualizarServicio');
	Route::get('/cms/crear/servicios', 'ServicioController@crearServicio');
	Route::post('/cms/guardar/servicio', 'ServicioController@guardarServicio');
	Route::post('/cms/eliminar/servicio/{id}', 'ServicioController@eliminarServicio');

	/* ----------  RUTA SERVICE REQUESTS CONTROLLADOR ---------*/
	Route::get('/cms/service/requests', 'ServiceRequestsController@index');

	/* ----------  RUTA PUBLICIDADES CONTROLLADOR ---------*/
	Route::get('/cms/crear/publicidad/{tipo}', 'PublicidadController@crearPublicidad');
	Route::post('/cms/guardar/publicidad', 'PublicidadController@guardarPublicidad');
	Route::post('/cms/actualizar/publicidad/{id}', 'PublicidadController@actualizarPublicidad');
	Route::post('/cms/actualizar/imagen/publicidad/{id}', 'PublicidadController@actualizarImagenPublicidad');
	Route::post('/cms/eliminar/publicidad/{id}', 'PublicidadController@eliminarPublicidad');

	/* ----------  RUTA CURSO CONTROLLADOR ---------*/
	Route::get('/cms/cursos/home', 'CursoController@cursosHome');
	Route::get('/cms/crear/curso', 'CursoController@crearCurso');
	Route::post('/cms/guardar/curso', 'CursoController@guardarCurso');
	Route::get('/cms/editar/curso/{id}', 'CursoController@editarCurso');
	Route::post('/cms/actualizar/curso/{id}', 'CursoController@actualizarCurso');
	Route::post('/cms/eliminar/curso/{id}', 'CursoController@eliminarCurso');

	/* ----------  RUTA CURSOS REQUESTS CONTROLLADOR ---------*/
	Route::get('/cms/cursos/requests', 'CursosRequestsController@index');

	/* ----------  RUTA INFORMACION CONTROLLADOR ---------*/
	Route::post('/cms/guardar/informacion', 'InformationController@actualizarInformacion');

	/* ----------  RUTA IMAGENES SLIDER CONTROLLADOR ---------*/
	Route::get('/cms/crear/slider/image', 'SliderImageController@crearImageSlider');
	Route::post('/cms/guardar/slider/image', 'SliderImageController@guardarImageSlider');
	Route::post('/cms/actualizar/slider/image/{id}', 'SliderImageController@actualizarImagenSlider');
	Route::get('/cms/delete/slider/image/{id}', 'SliderImageController@deleteImageSlider');

	/* ----------  RUTA CATEGORIAS CURSOS CONTROLLADOR ---------*/
	Route::get('/cms/curso/categorias', 'CategoryCourseController@index');
	Route::post('/cms/crear/curso/categorias', 'CategoryCourseController@guardarCategoria');
	Route::get('/cms/curso/categoria/{id}', 'CategoryCourseController@obtenerCategoriaCurso');
	Route::post('/cms/edit/curso/categoria/{id}', 'CategoryCourseController@editarCategoriaCurso');
	Route::post('/cms/eliminar/curso/categoria/{id}', 'CategoryCourseController@eliminarCategoriaCurso');

	/* ----------  RUTA NOSOTROS CONTROLLADOR ---------*/
	Route::get('/cms/nosotros', 'InformationController@informacionNosotros');
	Route::get('/cms/crear/nosotros', 'InformationController@crearInformacionNosotros');
	Route::post('/cms/guardar/nosotros', 'InformationController@guardarInformacionNosotros');
	Route::post('/cms/actualizar/nosotros/{id}', 'InformationController@actualizarNosotros');

	/* ----------  RUTA REVISTA CONTROLLADOR ---------*/
	Route::get('/cms/revista', 'RevistaController@index');
	Route::post('/cms/load/file', 'RevistaController@cargandoRevista');
	Route::get('/cms/obtener/revista/{id}', 'RevistaController@obtenerRevista');
	Route::post('/cms/actualizar/revista/{id}', 'RevistaController@actualizarRevista');
	Route::post('/cms/revista/eliminar/{id}', 'RevistaController@eliminarRevista');


	/* ----------  RUTA RECURSOS CONTROLLADOR ---------*/
	Route::get('/cms/recursos', 'RecursoController@index');
	Route::get('/cms/crear/recurso', 'RecursoController@crearRecurso');
	Route::post('/cms/guardar/recurso', 'RecursoController@guardarRecurso');
});


/*------------------------------------ END --------------------------*/



Auth::routes();

/*-------------------------------LOGIN DE ADMINISTRACION --------------------------*/
Route::get('admin', 'Admin\loginController@showLoginForm')->name('login.admin');
Route::post('admin', 'Admin\loginController@login')->name('login.admin');

