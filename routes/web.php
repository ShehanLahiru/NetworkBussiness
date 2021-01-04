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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about_us', 'ServicesController@services')->name('about-us');
Route::get('/contact_us', 'ContactDetailController@contactDetails')->name('contact-us');
Route::get('/project', 'ProjectController@project')->name('project');
Route::get('/{category}', 'ProjectController@projectCategory')->name('projectCategory');
Route::post('/storeMessage', 'ContactDetailController@storeMessage')->name('storeMessage');
