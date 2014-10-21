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

/*
|		Pagina Principal
*/

Route::get('/','MainController@comming');

Route::get('/inicio','MainController@index');

/*
|		Pagian con Informacion sobre Nosotros
*/

Route::get('/sobre-nosotros', 'MainController@aboutUs');

/*
|		Pagina con las Frecuent Asked Questions
*/

Route::get('/preguntas-frecuentes','MainController@faq');

/*
|		Pagina de Contacto Principal
*/

Route::get('/contacto','MainController@contacto');

/*
|404 | Pagina para manejar los exceptions de no encontrados
*/

Route::get('/404','ErrorsController@NoEncontrado');

/*
|		Pagina para Validar el Tipo de Registro que sera
*/

Route::get('/registro','RegistroController@index');

/*
|		Pagina para Validar el Tipo de Registro que sera
*/

Route::get('registro/empresa' , 'RegistroEmpresaController@index');

Route::get('politicas/','PoliticasController@index');
Route::get('politicas/privacidad/{network}','PoliticasController@privacidad');
Route::get('politicas/terms-of-service/{network}','PoliticasController@privacidad');
