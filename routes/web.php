<?php

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

Route::group(['before' => 'auth', 'prefix' => 'dashboard'], function () {
	Route::get('/', ['as' => 'dashboard', 'uses' => 'back\BackController@index']);
	Route::get('/solicitud-ayudantias-ordinarias', ['as' => 'solicitudAyudantiaOrdinaria', 'uses' => 'back\AyudantiaController@solicitudOrdinaria']);
	Route::post('/solicitud-ayudantias-ordinarias', ['as' => 'registrarSolicitudAO', 'uses' => 'back\AyudantiaController@registrarOrdinaria']);
	Route::get('/renovacion-ayudantias-ordinarias', ['as' => 'renovacionAyudantiaOrdinaria', 'uses' => 'back\AyudantiaController@renovacionOrdinaria']);
	Route::post('/renovacion-ayudantias-ordinarias', ['as' => 'registrarRenovacionAO', 'uses' => 'back\AyudantiaController@registrarRenovacionOrdinaria']);
	Route::get('/solicitud-ayudantias-tecnicas', ['as' => 'solicitudAyudantiaTecnica', 'uses' => 'back\AyudantiaController@solicitudTecnica']);
	Route::post('/solicitud-ayudantias-tecnicas', ['as' => 'registrarSolicitudAT', 'uses' => 'back\AyudantiaController@registrarTecnica']);
	Route::get('/renovacion-ayudantias-tecnicas', ['as' => 'renovacionAyudantiaTecnica', 'uses' => 'back\AyudantiaController@renovacionTecnica']);
	Route::post('/renovacion-ayudantias-tecnicas', ['as' => 'registrarRenovacionAT', 'uses' => 'back\AyudantiaController@registrarRenovacionTecnica']);
	Route::get('/solicitud-becas-residencia', ['as' => 'solicitudBecasResidencia', 'uses' => 'back\BecaController@solicitud']);
	Route::post('/solicitud-becas-residencia', ['as' => 'registrarSolicitudBR', 'uses' => 'back\BecaController@registrar']);
	Route::get('/renovacion-becas-residencia', ['as' => 'renovacionBecasResidencia', 'uses' => 'back\BecaController@renovacion']);
	Route::post('/renovacion-becas-residencia', ['as' => 'registrarRenovacionBR', 'uses' => 'back\BecaController@registrarRenovacion']);
	Route::get('/cita-cambio-especialidad', ['as' => 'citaCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@formularioCita']);
	Route::post('/cita-cambio-especialidad', ['as' => 'registrarCita', 'uses' => 'back\CambioEspecialidadController@registrarCita']);
	Route::get('/solicitudes-ayudantias-ordinarias', ['as' => 'solicitudesAyudantiasOrdinarias', 'uses' => 'back\AyudantiaController@listadoSolicitudesOrdinarias']);
});

Route::resource('login', 'back\LoginController');
Route::get('logout', ['as' => 'logout', 'uses' => 'back\LoginController@logout']);
Route::get('restaurar-contrasena', ['as' => 'restaurarContrasena', 'uses' =>'back\LoginController@changePassword']);
Route::post('postChangePassword', ['as' => 'postChangePassword', 'uses' =>'back\LoginController@postChangePassword']);
Route::get('/selectUsuario/{id}', ['as' => 'selectusuario', 'uses' => 'back\LoginController@preguntaUsuarioSeleccionado']);
Route::get('/nueva-contrasena/{id}', ['as' => 'nuevaContrasena', 'uses' =>'back\LoginController@nuevoPassword']);
Route::post('postNewPassword', ['as' => 'postNewPassword', 'uses' =>'back\LoginController@postNewPassword']);