<?php

header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Headers: origin, x-requested-with, content-type');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
//});

//Route::get('/cliente/listar/{page}/{size}/{dir}/{props}', 'Rest\clienteRestController@index');

Route::get('/cliente/listar', 'Rest\ClienteRestController@index');
Route::get('/usuario/listar', 'Rest\UsuarioRestController@index');

// Route::get('/cliente/alterar/{id}','Rest\clienteRestController@update');
// Route::get('/cliente/excluir/{id}','Rest\clienteRestController@delete');
// Route::get('/cliente/consultar/{id}','Rest\clienteRestController@view');

// Route::post('/cliente/salvar','Rest\clienteRestController@create');
// Route::post('/cliente/update/{id}','Rest\clienteRestController@save');
// Route::post('/cliente/excluir/{id}','Rest\clienteRestController@excluir');