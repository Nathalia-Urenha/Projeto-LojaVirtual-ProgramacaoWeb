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

//Route::get('/cliente/incluir', function () {
//    return view('cliente.incluir');
//});

//Route::get('/cliente/alterar', function () {
//    return view('cliente.alterar');
//});

//Route::get('/cliente/excluir', function () {
//    return view('cliente.excluir');
//});

//Route::get('/cliente/consultar', function () {
//    return view('cliente.consultar');
//});

//Route::get('/endereco/incluir', function () {
//    return view('endereco.incluir');
//});

Route::get('/cliente/listar', 'ClienteController@index')->name('cliente.listar');
Route::get('/cliente/incluir', 'ClienteController@new')->name('cliente.incluir');
Route::get('/cliente/cancelar', 'ClienteController@cancel')->name('cliente.cancelar');

Route::get('/cliente/alterar/{id}', 'ClienteController@update')->name('cliente.update');
Route::get('/cliente/excluir/{id}', 'ClienteController@delete')->name('cliente.delete');
Route::get('/cliente/consultar/{id}', 'ClienteController@consult')->name('cliente.consultar');

Route::post('/cliente/salvar', 'ClienteController@create')->name('cliente.salvar');
Route::post('/cliente/update/{id}', 'ClienteController@save')->name('cliente.atualizar');
Route::post('/cliente/excluir/{id}', 'ClienteController@excluir')->name('cliente.excluir');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');