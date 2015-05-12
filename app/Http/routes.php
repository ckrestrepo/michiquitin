<?php


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Rutas para terceros

Route::get('terceros', ['as' => 'terceros', 'uses' => 'TerceroController@index']);
Route::get('terceros/create', ['as' => 'terceros', 'uses' => 'TerceroController@create']);
Route::post('terceros', ['as' => 'terceros', 'uses' => 'TerceroController@store']);


Route::get('client', ['as' => 'client', 'uses' => 'ClientController@index']);
Route::get('client/create', ['as' => 'client', 'uses' => 'ClientController@create']);

Route::post('client', ['as' => 'client', 'uses' => 'ClientController@store']);



