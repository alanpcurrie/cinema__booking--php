<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//static page routes
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('feature', 'PagesController@feature');
Route::get('locations', 'PagesController@locations');
Route::get('showingnow', 'PagesController@showingnow');
Route::get('contact', 'PagesController@contact');
Route::get('kids', 'PagesController@kids');

//movie page route dynamically generated
Route::get('movie', 'MovieController@index');

//authentication routes
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

//Route::get('admin', 'PagesController@admin');

//admin route group
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login');


Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
      Route::get('/', 'PagesController@home');

      Route::get('users', 'UsersController@index');
      Route::get('users/{id?}/edit', 'UsersController@edit');
      Route::post('users/{id?}/edit','UsersController@update');

      Route::get('roles', 'RolesController@index');
      Route::get('roles/create', 'RolesController@create');
      Route::post('roles/create', 'RolesController@store');

});
