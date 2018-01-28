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
Route::get('about', 'AboutController@showContent');
Route::get('service', 'ServiceController@showContent');
Route::get('overseas', 'StudyController@showContent');
Route::get('overseas/australia', 'StudyController@australia');
Route::get('overseas/canada', 'StudyController@canada');
Route::get('overseas/switzerland', 'StudyController@switzerland');
Route::get('overseas/uk', 'StudyController@uk');
Route::get('overseas/usa', 'StudyController@usa');
Route::get('contact', 'ContactController@showContent');
Route::post('email', 'ContactController@sendEmail');