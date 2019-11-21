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



Route::get('/','HomeController@app');
Route::get('/home', 'HomeController@app')->name('home');


Auth::routes();

Route::group(['middleware'=>['auth']],function(){
	Route::resource('unidade',               'UnidadeController');
	Route::resource('especializacao',        'EspecializacaoController');
	Route::resource('unidadeespecializacao', 'UnidadeEspecializacaoController');
});

Route::get('getUnidades', 'UnidadeEspecializacaoController@getUnidades');
Route::get('getDados/{u}',    'UnidadeEspecializacaoController@getDados');
Route::get('getesp', 'UnidadeEspecializacaoController@getEsp');
Route::get('getuni/{u}', 'UnidadeEspecializacaoController@getUni');