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
	return View::make('layouts.home');
});
Route::get('/','HomeController@showQuestionList');

Route::resource('addquestion', 'QuestionController');

Route::get('login','SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::get('retrievepass', 'SessionsController@forgotpassword');

Route:: get('changepass','SessionsController@changepassword');
Route:: get('register', 'SessionsController@registeruser');



Route::get('changepass','SessionsController@changepassword');


