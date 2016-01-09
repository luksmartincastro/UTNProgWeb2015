<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/', function () {
    return view('index');
});*/

Route::group(['prefix' => 'api'], function()
{
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');
});

/* Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset'); 
*/
//----------------------------------------------------------------------
//-----------------------AtPublicoController----------------------------
//----------------------------------------------------------------------
Route::get('AtPublicoIndex','AtPublicoController@index');
Route::post('getModelos','AtPublicoController@getModelos');
Route::post('getRepuestos','AtPublicoController@getRepuestos');
Route::post('getPresupuesto','AtPublicoController@getPresupuesto');
Route::post('GuardarPresupuesto','AtPublicoController@getGuardarPresupuesto');

Route::get('Recepcion','AtPublicoController@recepcion');

Route::get('Entrega','AtPublicoController@entrega');
Route::post('getOrdenApeNom', 'AtPublicoController@getOrdenApeNom');
Route::post('getOrdenNumero','AtPublicoController@getOrdenNumero');
Route::get('getTraerOrden','AtPublicoController@getTraerOrden');
//----------------------------------------------------------------------
//-----------------------AdminController----------------------------
//----------------------------------------------------------------------
Route::get('AdminIndex','AdminController@index');
//----------------------------------------------------------------------
//-----------------------TecnicoController----------------------------
//----------------------------------------------------------------------
Route::get('TecnicoIndex','TecnicoController@index');