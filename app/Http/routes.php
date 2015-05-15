<?php


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/*
Route::get('/', array('as' => 'cartera', function()
{
    return Redirect::route('terceros');
}));

Route::get('cartera', array('as' => 'cartera', function()
{
    return Redirect::route('prueba');
}));
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Rutas de Client

Route::get('client', [
    'as' => 'client',
    'uses' => 'ClientController@index']);

Route::post('client', [
    'as' => 'client',
    'uses' => 'ClientController@store']);

// RUTAS NUEVAS

Route::get('cliente-estado}', [
    'as' => 'cliente_estado',
    'uses' => 'CarteraController@buscar'
]);



// Rutas Auxiliares (copiadas)

Route::get('crear-tercero', [
    'as' => 'crear_tercero',
    'uses' => 'TerceroController@create'
]);

Route::post('guardar-tercero', [
    'as' => 'guardar_tercero',
    'uses' => 'TerceroController@store'
]);

Route::get('terceros', [
    'as' => 'listado_de_terceros',
    'uses' => 'TerceroController@index'
]);

Route::get('buscar-tercero', [
    'as' => 'buscar_tercero',
    'uses' => 'TerceroController@buscar'
]);

Route::get('mostrar-tercero/{id}', [
    'as' => 'mostrar_tercero',
    'uses' => 'TerceroController@show'
]);

Route::get('editar-tercero/{id}', [
    'as' => 'editar_tercero',
    'uses' => 'TerceroController@edit'
]);

Route::post('actualizar-tercero', [
    'as' => 'actualizar_tercero',
    'uses' => 'TerceroController@update'
]);




Route::get('crear-cuenta/{tercero}', [
    'as' => 'crear_cuenta',
    'uses' => 'CuentaController@create'
]);

Route::post('guardar-cuenta', [
    'as' => 'guardar_cuenta',
    'uses' => 'CuentaController@store'
]);

Route::get('editar-cuenta/{id}', [
    'as' => 'editar_cuenta',
    'uses' => 'CuentaController@edit'
]);

Route::post('actualizar-cuenta', [
    'as' => 'actualizar_cuenta',
    'uses' => 'CuentaController@update'
]);




Route::get('crear-cartera/{documento}/{tercero}', [
    'as' => 'crear_cartera',
    'uses' => 'CarteraController@create'
]);

Route::post('guardar-cartera', [
    'as' => 'guardar_cartera',
    'uses' => 'CarteraController@store'
]);

Route::get('carteras/{documento}/{tercero}', [
    'as' => 'listado_de_carteras',
    'uses' => 'CarteraController@index'
]);

Route::get('editar-cartera/{id}', [
    'as' => 'editar_cartera',
    'uses' => 'CarteraController@edit'
]);

Route::post('actualizar-cartera', [
    'as' => 'actualizar_cartera',
    'uses' => 'CarteraController@update'
]);

Route::get('abonar-cartera/{id_cartera}', [
    'as' => 'abonar_cartera',
    'uses' => 'AbonoController@create'
]);



Route::post('guardar-abono', [
    'as' => 'guardar_abono',
    'uses' => 'AbonoController@store'
]);

Route::get('mostrar-abonos/{cartera_id}', [
    'as' => 'mostrar_abonos',
    'uses' => 'AbonoController@index'
]);

Route::get('editar-abono/{id}', [
    'as' => 'editar_abono',
    'uses' => 'AbonoController@edit'
]);

Route::post('actualizar-abono', [
    'as' => 'actualizar_abono',
    'uses' => 'AbonoController@update'
]);

Route::get('informe-general-de-carteras/{documento}', [
    'as' => 'cartera_general',
    'uses' => 'CarteraController@general'
]);

Route::get('buscar-cartera/{documento}/{tercero}', [
    'as' => 'buscar_cartera',
    'uses' => 'CarteraController@buscar'
]);
