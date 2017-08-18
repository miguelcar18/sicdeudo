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
Route::get('/area-desarrollo-social', ['as' => 'desarrolloSocial', 'uses' => 'front\FrontController@desarrolloSocial']);
Route::get('/area-salud', ['as' => 'salud', 'uses' => 'front\FrontController@salud']);
Route::get('/area-orientacion', ['as' => 'orientacion', 'uses' => 'front\FrontController@orientacion']);
Route::get('/area-orientacion-cambio-especialidad', ['as' => 'orientacionCambioEspecialidad', 'uses' => 'front\FrontController@orientacionCambioEspecialidad']);
Route::get('/area-socio-educativa', ['as' => 'socioEducativa', 'uses' => 'front\FrontController@socioEducativa']);
Route::get('/desarrollo-estudiantil', ['as' => 'desarrolloEstudiantil', 'uses' => 'front\FrontController@desarrolloEstudiantil']);
Route::get('/contactos', ['as' => 'contactos', 'uses' => 'front\FrontController@contactos']);

Route::group(['before' => 'auth', 'prefix' => 'dashboard'], function () {
	Route::get('/', ['as' => 'dashboard', 'uses' => 'back\BackController@index']);

	Route::get('/solicitud-ayudantias-ordinarias', ['as' => 'solicitudAyudantiaOrdinaria', 'uses' => 'back\AyudantiaController@solicitudOrdinaria']);
	Route::get('/renovacion-ayudantias-ordinarias', ['as' => 'renovacionAyudantiaOrdinaria', 'uses' => 'back\AyudantiaController@renovacionOrdinaria']);
	Route::get('/solicitud-ayudantias-tecnicas', ['as' => 'solicitudAyudantiaTecnica', 'uses' => 'back\AyudantiaController@solicitudTecnica']);
	Route::get('/renovacion-ayudantias-tecnicas', ['as' => 'renovacionAyudantiaTecnica', 'uses' => 'back\AyudantiaController@renovacionTecnica']);
	Route::post('/solicitud-ayudantias', ['as' => 'registrarSolicitud', 'uses' => 'back\AyudantiaController@registrarSolicitud']);
	Route::post('/renovacion-ayudantias', ['as' => 'registrarRenovacion', 'uses' => 'back\AyudantiaController@registrarRenovacion']);

	Route::get('/solicitud-becas-residencia', ['as' => 'solicitudBecasResidencia', 'uses' => 'back\BecaController@solicitud']);
	Route::get('/renovacion-becas-residencia', ['as' => 'renovacionBecasResidencia', 'uses' => 'back\BecaController@renovacion']);
	Route::post('/solicitud-becas-residencia', ['as' => 'registrarSolicitudBR', 'uses' => 'back\BecaController@registrar']);
	Route::post('/renovacion-becas-residencia', ['as' => 'registrarRenovacionBR', 'uses' => 'back\BecaController@registrarRenovacion']);

	Route::get('/cita-cambio-especialidad', ['as' => 'citaCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@formularioCita']);
	Route::post('/cita-cambio-especialidad', ['as' => 'registrarCita', 'uses' => 'back\CambioEspecialidadController@registrarCita']);

	Route::get('/solicitudes-ayudantias-ordinarias', ['as' => 'solicitudesAyudantiasOrdinarias', 'uses' => 'back\AyudantiaController@listadoSolicitudesOrdinarias']);
	Route::get('/renovaciones-ayudantias-ordinarias', ['as' => 'renovacionesAyudantiasOrdinarias', 'uses' => 'back\AyudantiaController@listadoRenovacionesOrdinarias']);
	Route::get('/solicitudes-ayudantias-tecnicas', ['as' => 'solicitudesAyudantiasTecnicas', 'uses' => 'back\AyudantiaController@listadoSolicitudesTecnicas']);
	Route::get('/renovaciones-ayudantias-tecnicas', ['as' => 'renovacionesAyudantiasTecnicas', 'uses' => 'back\AyudantiaController@listadoRenovacionesTecnicas']);
	Route::get('/solicitudes-becas-residencia', ['as' => 'solicitudesBecasResidencia', 'uses' => 'back\BecaController@listadoSolicitudesBecas']);
	Route::get('/renovaciones-becas-residencia', ['as' => 'renovacionesBecasResidencia', 'uses' => 'back\BecaController@listadoRenovacionesBecas']);
	Route::get('/solicitudes-cambio-especialidad', ['as' => 'solicitudesCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@listadoSolicitudesCambioEspecialidad']);

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

	Route::get('/solicitudes-ayudantias-ordinarias-es', ['as' => 'solicitudesAyudantiasOrdinariasEs', 'uses' => 'back\AyudantiaController@listadoSolicitudesOrdinariasEs']);
	Route::get('/solicitudes-ayudantias-tecnicas-es', ['as' => 'solicitudesAyudantiasTecnicasEs', 'uses' => 'back\AyudantiaController@listadoSolicitudesTecnicasEs']);
	Route::get('/solicitudes-becas-residencia-es', ['as' => 'solicitudesBecasResidenciaEs', 'uses' => 'back\BecaController@listadoBecasEs']);
	Route::get('/renovaciones-ayudantias-ordinarias-es', ['as' => 'renovacionesAyudantiasOrdinariasEs', 'uses' => 'back\AyudantiaController@listadoRenovacionesOrdinariasEs']);
	Route::get('/renovaciones-ayudantias-tecnicas-es', ['as' => 'renovacionesAyudantiasTecnicasEs', 'uses' => 'back\AyudantiaController@listadoRenovacionesTecnicasEs']);
	Route::get('/renovaciones-becas-residencia-es', ['as' => 'renovacionesBecasResidenciaEs', 'uses' => 'back\BecaController@listadoRenovacionesBecasEs']);

	Route::get('/estudio-socio-economico/{id}/{peticion}', ['as' => 'estudioSE', 'uses' => 'back\BackController@formularioEstudioSE']);
	Route::post('/estudio-socio-economico', ['as' => 'registrarES', 'uses' => 'back\BackController@registrarEstudioSE']);

	Route::get('/solicitudes-ayudantias-ordinarias-aprobar', ['as' => 'solicitudesAyudantiasOrdinariasAprobar', 'uses' => 'back\AyudantiaController@listadoSolicitudesOrdinariasAprobar']);
	Route::get('/ayudantia-ordinaria-aprobar/{id}', ['as' => 'AprobarAO', 'uses' => 'back\AyudantiaController@formularioAprobarAO']);

	Route::get('/solicitudes-cambio-especialidad-aprobar', ['as' => 'solicitudesCambioEspecialidadAprobar', 'uses' => 'back\CambioEspecialidadController@listadoSolicitudesCambioEspecialidadAprobar']);
	Route::get('/cambio-especialidad-aprobar/{id}', ['as' => 'AprobarCambioEspecialidad', 'uses' => 'back\CambioEspecialidadController@formularioAprobarCambioEspecialidad']);

	Route::get('/reportes', ['as' => 'formularioReportes', 'uses' => 'back\BackController@formularioReportes']);
	Route::get('/reporte-estadistico', ['as' => 'formularioReporteEstadistico', 'uses' => 'back\BackController@formularioReporteEstadistico']);

	Route::resource('usuarios', 'back\UserController');
	Route::resource('redes-sociales', 'back\RedesSocialesController');
	Route::resource('enlaces-interes', 'back\EnlacesInteresController');
});

Route::resource('login', 'back\LoginController');
Route::get('logout', ['as' => 'logout', 'uses' => 'back\LoginController@logout']);
Route::get('restaurar-contrasena', ['as' => 'restaurarContrasena', 'uses' =>'back\LoginController@changePassword']);
Route::post('postChangePassword', ['as' => 'postChangePassword', 'uses' =>'back\LoginController@postChangePassword']);
Route::get('/selectUsuario/{id}', ['as' => 'selectusuario', 'uses' => 'back\LoginController@preguntaUsuarioSeleccionado']);
Route::get('/nueva-contrasena/{id}', ['as' => 'nuevaContrasena', 'uses' =>'back\LoginController@nuevoPassword']);
Route::post('postNewPassword', ['as' => 'postNewPassword', 'uses' =>'back\LoginController@postNewPassword']);