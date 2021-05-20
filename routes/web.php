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

Route::get('/imagem/{imagem}', 'ImageController@getImages')->name('imagem.get');
Route::post('/store', 'ImageController@store')->name('imagem.store');
Route::post('/imagem/excluir', 'ImageController@excluir')->name('imagem.excluir');
Route::get('/thumbnail/{imagem}', 'ImageController@getThumbnails')->name('thumbnail.get');

Route::get('/usuario/listar', 'UsuarioController@index')->name('usuario.listar');
Route::get('/usuario/incluir', 'UsuarioController@new')->name('usuario.incluir');
Route::get('/usuario/cancelar', 'UsuarioController@cancel')->name('usuario.cancelar');
Route::get('/usuario/alterar/{id}','UsuarioController@update')->name('usuario.update');
Route::post('/usuario/salvar','UsuarioController@create')->name('usuario.salvar');
Route::post('/usuario/update/{id}','UsuarioController@save')->name('usuario.atualizar');


Route::get('/cliente/listar', 'ClienteController@index')->name('cliente.listar');
Route::get('/cliente/incluir', 'ClienteController@new')->name('cliente.incluir');
Route::get('/cliente/cancelar', 'ClienteController@cancel')->name('cliente.cancelar');


Route::get('/cliente/alterar/{id}', 'ClienteController@update')->name('cliente.update');
Route::get('/cliente/excluir/{id}', 'ClienteController@delete')->name('cliente.delete');
Route::get('/cliente/consultar/{id}', 'ClienteController@consult')->name('cliente.consultar');

Route::post('/cliente/salvar', 'ClienteController@create')->name('cliente.salvar');
Route::post('/cliente/alterar/{id}', 'ClienteController@save')->name('cliente.alterar');
Route::post('/cliente/excluir/{id}', 'ClienteController@excluir')->name('cliente.excluir');

Route::any('search_cliente', 'ClienteController@search')->name('search_cliente');


Auth::routes();

Route::get('/cliente/home', 'ClienteController@home')->name('cliente.home');

Route::get('/endereco/listar', 'EnderecoController@index')->name('endereco.listar');
Route::get('/endereco/incluir', 'enderecoController@new')->name('endereco.incluir');
Route::get('/endereco/cancelar', 'enderecoController@cancel')->name('endereco.cancelar');


Route::get('/endereco/alterar/{id}', 'EnderecoController@update')->name('endereco.update');
Route::get('/endereco/excluir/{id}', 'EnderecoController@delete')->name('endereco.delete');
Route::get('/endereco/consultar/{id}', 'EnderecoController@consult')->name('endereco.consultar');

Route::post('/endereco/salvar', 'EnderecoController@create')->name('endereco.salvar');
Route::post('/endereco/alterar/{id}', 'EnderecoController@save')->name('endereco.alterar');
Route::post('/endereco/excluir/{id}', 'EnderecoController@excluir')->name('endereco.excluir');

Route::any('search_endereco', 'EnderecoController@search')->name('search_endereco');


//Auth::routes();

//Route::get('/endereco/home', 'EnderecoController@home')->name('endereco.home');

