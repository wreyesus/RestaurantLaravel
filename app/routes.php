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

Route::get('check', function()
{
	return View::make('hello');
});

Route::get('/pari',array(
	'as'=>'home',
	'uses'=>'HomeController@Home'
	));

Route::get('about',function(){
	return 'hhhh';//View::make('about');
});

Route::get('contact','PagesController@contact');

Route::resource('user','UserController');


?>