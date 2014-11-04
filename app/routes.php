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

Route::get('/settings', 'SystemController@settings');

Route::get('/system/users', 'SystemController@users');
Route::get('/system/users/{id}', 'SystemController@user');

Route::get('/system/projects', 'SystemController@projects');
Route::get('/system/projects/{id}', 'SystemController@project');

Route::any('/api/{item}/{id}', 'APIController@get');

// More registered dynamicaly via ModuleEngine from module_*.php files.