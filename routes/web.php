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

//tickets routes
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
//display a single ticket
Route::get('/ticket/{slug?}', 'TicketsController@show');


//all Posts
Route::get('/showing', 'ShowingController@index');
//single Post
Route::get('/showing/{slug?}', 'ShowingController@show');

//authentication routes
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

//login route
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login');

//admin route group
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
      Route::get('/', 'PagesController@home');

      Route::get('users', 'UsersController@index');
      Route::get('users/{id?}/edit', 'UsersController@edit');
      Route::post('users/{id?}/edit','UsersController@update');

      Route::get('roles', 'RolesController@index');
      Route::get('roles/create', 'RolesController@create');
      Route::post('roles/create', 'RolesController@store');

      Route::get('posts', 'PostsController@index');
      Route::get('posts/create', 'PostsController@create');
      Route::post('posts/create', 'PostsController@store');
      Route::get('posts/{id?}/edit', 'PostsController@edit');
      Route::post('posts/{id?}/edit','PostsController@update');

      Route::get('categories', 'CategoriesController@index');
      Route::get('categories/create', 'CategoriesController@create');
      Route::post('categories/create', 'CategoriesController@store');

});

Route::group(array( 'middleware' => 'member' ), function () {
      //tickets routes
      Route::get('/contact', 'TicketsController@create');
      Route::post('/contact', 'TicketsController@store');
      Route::get('/tickets', 'TicketsController@index');
      //display a single ticket
      Route::get('/ticket/{slug?}', 'TicketsController@show');
});

Route::group(array( 'middleware' => 'manager' ), function () {
      //tickets routes
      Route::get('/contact', 'TicketsController@create');
      Route::post('/contact', 'TicketsController@store');
      Route::get('/tickets', 'TicketsController@index');
      //display a single ticket
      Route::get('/ticket/{slug?}', 'TicketsController@show');
});
