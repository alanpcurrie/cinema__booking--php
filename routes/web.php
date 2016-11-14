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

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('feature', 'PagesController@feature');
Route::get('admin', 'PagesController@admin');
Route::get('movie', 'MovieController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');
