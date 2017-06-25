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
});

Route::resource('login', 'back\LoginController');
Route::get('logout', ['as' => 'logout', 'uses' => 'back\LoginController@logout']);
Route::get('restaurar-contrasena', ['as' => 'restaurarContrasena', 'uses' =>'back\LoginController@changePassword']);
Route::post('postChangePassword', ['as' => 'postChangePassword', 'uses' =>'back\LoginController@postChangePassword']);
Route::get('/selectUsuario/{id}', ['as' => 'selectusuario', 'uses' => 'back\LoginController@preguntaUsuarioSeleccionado']);
Route::get('/nueva-contrasena/{id}', ['as' => 'nuevaContrasena', 'uses' =>'back\LoginController@nuevoPassword']);
Route::post('postNewPassword', ['as' => 'postNewPassword', 'uses' =>'back\LoginController@postNewPassword']);