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

Route::get('/', 'WelcomeController@showContent');
Route::get('works', 'WorksController@showContent');
Route::get('works/xlaxiata', 'WorksController@xlaxiata');
Route::get('works/lokalewedding', 'WorksController@lokalewedding');
Route::get('works/icedu', 'WorksController@icedu');
Route::get('works/gigs', 'WorksController@gigs');
Route::get('about', 'AboutController@showContent');
Route::get('contact', 'ContactController@showContent');