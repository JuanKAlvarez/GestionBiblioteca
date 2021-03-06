<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('install', 'HomeController@install');

Route::resource('catalogo', 'CatalogoController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'admin', 'namespace' => '\Admin', 'middleware'=> [ 'auth', 'is_admin'] ], function()
{
    Route::resource('users', 'UsersController');

});

Route::group(['prefix'=>'user', 'middleware'=> [ 'auth'] ], function()
{
    Route::resource('profile', 'UserProfileController');

});