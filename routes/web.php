<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato',["uses"=>"ContatoController@index"]);
Route::get('/sobre/{nome?}',["uses"=>"SobreController@index"]);
Route::get('/tester',["uses"=>"TesterController@index","as"=>"Tester.index"]);
Route::post('/salvar',["uses"=>"TesterController@enviar","as"=>"Tester.enviar"]);
Route::get('/registro',["uses"=>"TesterController@login","as"=>"Tester.login"]);
Auth::routes();

Route::get('/home', 'HomeController@index');
