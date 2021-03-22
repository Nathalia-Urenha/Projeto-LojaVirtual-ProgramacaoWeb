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

Route::get('/cliente/incluir', function () {
    return view('cliente.incluir');
});

Route::get('/cliente/alterar', function () {
    return view('cliente.alterar');
});

Route::get('/cliente/excluir', function () {
    return view('cliente.excluir');
});

Route::get('/cliente/consultar', function () {
    return view('cliente.consultar');
});

Route::get('/endereco/incluir', function () {
    return view('endereco.incluir');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');