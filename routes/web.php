<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('home', 'HomeController@index')->name('home'); //user dashboard

Route::get('/', 'WelcomeController')->name('welcome'); //website front/home page

Route::get('courses', 'CoursesController@index')->name('courses');

Route::get('teachers', 'TeachersController@index')->name('teachers');

Route::get('events', 'EventsController@index')->name('events');

Route::get('about-us', 'AboutUsController@index')->name('about-us');

Route::get('contact', 'ContactController@index')->name('contact');

Route::resource('slider', 'SliderController');