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
})->name('main');

Route::get('/protegido/{id?}', function(){
	return view('protegido');
})->middleware('contato');

Route::get('/fruta/{id?}','frutinha@index')->name('fruta');

Route::get('/contato',function(){
	return view('Tester.user');
})->name('contato');

Route::get('/git',function(){
	return redirect()->away("https://www.github.com/juliofrontend/php-itego");
})->name("git");

Route::get('/link',"frutinha@link")->name('link');

Route::get('/lik',function(){
	return view('link');
})->name('lik');

Route::get('/user',"UserController@index");
Route::get('/userA',"UserController@another");

Route::fallback(function(){
	return "<h1>error</h1>";
});
