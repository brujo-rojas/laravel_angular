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

Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data


Route::get('/', 'HomeController@showWelcome');
Route::get('/f/clase', 'FrontController@clase');
Route::get('/f/exp1', 'FrontController@exp1');
Route::get('/f/exp1/mostrar', 'FrontController@mostrar');


Route::get("/f/exp1/lista", function(){
	return View::make("exp.uno.lista");
});