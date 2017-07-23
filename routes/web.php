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

Route::get('/', ['as' => 'front', 'uses' => 'front\FrontController@index']);

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

	Route::get('/registrar-requisitos-ayudantias-ordinarias/{id}', ['as' => 'formularioRequisitosAO', 'uses' => 'back\AyudantiaController@formularioRequisitosAO']);
	Route::post('/registrar-requisitos-ayudantias-ordinarias', ['as' => 'registrarRequisitosAO', 'uses' => 'back\AyudantiaController@registrarRequisitosAO']);
	Route::get('/registrar-renovacion-ayudantias-ordinarias/{id}', ['as' => 'formularioRequisitosRenovacionAO', 'uses' => 'back\AyudantiaController@formularioRequisitosRenovacionAO']);
	Route::post('/registrar-renovacion-ayudantias-ordinarias', ['as' => 'registrarRequisitosRenovacionAO', 'uses' => 'back\AyudantiaController@registrarRequisitosRenovacionAO']);

	Route::get('/registrar-requisitos-ayudantias-tecnicas/{id}', ['as' => 'formularioRequisitosAT', 'uses' => 'back\AyudantiaController@formularioRequisitosAT']);
	Route::post('/registrar-requisitos-ayudantias-tecnicas', ['as' => 'registrarRequisitosAT', 'uses' => 'back\AyudantiaController@registrarRequisitosAT']);
	Route::get('/registrar-renovacion-ayudantias-tecnicas/{id}', ['as' => 'formularioRequisitosRenovacionAT', 'uses' => 'back\AyudantiaController@formularioRequisitosRenovacionAT']);
	Route::post('/registrar-renovacion-ayudantias-tecnicas', ['as' => 'registrarRequisitosRenovacionAT', 'uses' => 'back\AyudantiaController@registrarRequisitosRenovacionAT']);

	Route::get('/registrar-requisitos-becas/{id}', ['as' => 'formularioRequisitosBeca', 'uses' => 'back\BecaController@formularioRequisitosBeca']);
	Route::post('/registrar-requisitos-becas', ['as' => 'registrarRequisitosBecas', 'uses' => 'back\BecaController@registrarRequisitosBeca']);
	Route::get('/registrar-renovacion-becas/{id}', ['as' => 'formularioRequisitosRenovacionBeca', 'uses' => 'back\BecaController@formularioRequisitosRenovacionBeca']);
	Route::post('/registrar-renovacion-becas', ['as' => 'registrarRequisitosRenovacionBecas', 'uses' => 'back\BecaController@registrarRequisitosRenovacionBeca']);

	Route::get('/registrar-requisitos-cambio-especialidad/{id}', ['as' => 'formularioRequisitosCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@formularioRequisitosCambioEspecialidad']);
	Route::post('/registrar-requisitos-cambio-especialidad', ['as' => 'registrarRequisitosCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@registrarRequisitosCambioEspecialidad']);
	Route::get('/registrar-renovacion-cambio-especialidad/{id}', ['as' => 'formularioRequisitosRenovacionCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@formularioRequisitosRenovacionCambioEspecialidad']);
	Route::post('/registrar-renovacion-cambio-especialidad', ['as' => 'registrarRequisitosRenovacionCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@registrarRequisitosRenovacionCambioEspecialidad']);

	Route::get('/solicitudes-ayudantias-ordinarias-es', ['as' => 'solicitudesAyudantiasOrdinariasEs', 'uses' => 'back\AyudantiaController@listadoSolicitudesOrdinariasEs']);
	Route::get('/ayudantia-ordinaria-estudiose/{id}', ['as' => 'estudioSEAO', 'uses' => 'back\AyudantiaController@formularioEstudioSEAO']);

	Route::get('/solicitudes-ayudantias-ordinarias-aprobar', ['as' => 'solicitudesAyudantiasOrdinariasAprobar', 'uses' => 'back\AyudantiaController@listadoSolicitudesOrdinariasAprobar']);
	Route::get('/ayudantia-ordinaria-aprobar/{id}', ['as' => 'AprobarAO', 'uses' => 'back\AyudantiaController@formularioAprobarAO']);

	Route::get('/solicitudes-cambio-especialidad-aprobar', ['as' => 'solicitudesCambioEspecialidadAprobar', 'uses' => 'back\CambioEspecialidadController@listadoSolicitudesCambioEspecialidadAprobar']);
	Route::get('/cambio-especialidad-aprobar/{id}', ['as' => 'AprobarCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@formularioAprobarCambioEspecialidad']);

	Route::get('/reportes', ['as' => 'formularioReportes', 'uses' => 'back\BackController@formularioReportes']);
	Route::get('/reporte-estadistico', ['as' => 'formularioReporteEstadistico', 'uses' => 'back\BackController@formularioReporteEstadistico']);
});

Route::resource('login', 'back\LoginController');
Route::get('logout', ['as' => 'logout', 'uses' => 'back\LoginController@logout']);
Route::get('restaurar-contrasena', ['as' => 'restaurarContrasena', 'uses' =>'back\LoginController@changePassword']);
Route::post('postChangePassword', ['as' => 'postChangePassword', 'uses' =>'back\LoginController@postChangePassword']);
Route::get('/selectUsuario/{id}', ['as' => 'selectusuario', 'uses' => 'back\LoginController@preguntaUsuarioSeleccionado']);
Route::get('/nueva-contrasena/{id}', ['as' => 'nuevaContrasena', 'uses' =>'back\LoginController@nuevoPassword']);
Route::post('postNewPassword', ['as' => 'postNewPassword', 'uses' =>'back\LoginController@postNewPassword']);