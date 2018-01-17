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
Route::get('about-us', 'AboutController@showContent');
Route::get('service', 'ServiceController@showContent');
Route::get('study-overseas', 'StudyController@showContent');
Route::get('study-overseas/australia', 'StudyController@australia');
Route::get('study-overseas/switzerland', 'StudyController@switzerland');
Route::get('contact-us', 'ContactController@showContent');