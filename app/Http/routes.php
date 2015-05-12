<?php


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('client', ['as' => 'client', 'uses' => 'ClientController@index']);

Route::post('client', ['as' => 'client', 'uses' => 'ClientController@store']);


resource('terceros', 'TerceroController');



