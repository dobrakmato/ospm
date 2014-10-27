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

Route::get('/', 'IndexController@index');

Route::get('/system/login', 'LoginController@showLogin');
Route::post('/system/login', 'LoginController@doLogin');

Route::any('/system/logout', 'LoginController@logout');

Route::get('/system/register', 'LoginController@showRegister');

Route::get('/system/users', 'AdminController@users');
Route::get('/system/projects', 'AdminController@projects');

Route::any('/api/{item}/{id}', 'APIController@get');