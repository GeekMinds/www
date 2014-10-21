<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/404', function()
{
	return View::make('404');
});

Route::get('/sobre-nosotros',function(){
	return View::make('sobre-nosotros');
});

<<<<<<< HEAD
Route::get('/registro',function(){
	return View::make('registro-check');
});

Route::get('/registro/miembro',function(){
	return View::make('registro-user');
});

Route::get('/registro/partner',function(){
	return View::make('registro-partner');
});



=======
>>>>>>> 365dacd2ad687a70af54f6ec728d79acec39366b
Route::get('/contacto',function(){
	return View::make('contacto');
});
