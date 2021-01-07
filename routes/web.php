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



Route::get('/backend', 'Auth\LoginController@showLoginForm')->name('backend.login');
Route::post('/dashboard', 'Auth\LoginController@login')->name('backend.login.submit');
Route::post('logout', 'Auth\LoginController@logout')->name('backend.logout');

Route::group(['middleware' => 'auth'], function () {

Route::get('/dashboard', 'HomeController@index')->name('backend.dashboard');

Route::resource('users', 'UserController', ['as' => 'backend']);

// Route::resource('projects', 'ProjectController', ['as' => 'backend']);

// Route::resource('mainImages', 'MainImageController', ['as' => 'backend']);
// Route::resource('customers', 'CustomerController', ['as' => 'backend']);
// // Route::resource('contactDetails', 'ContactDetailController', ['as' => 'backend']);
// Route::resource('services', 'ServicesController', ['as' => 'backend']);
// Route::post('/messageSearchByDate', 'CustomerController@messageSearchByDate')->name('backend.messageSearchByDate');

});



Route::get('/', 'HomeController@home')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/contact_us', 'ContactDetailController@contactDetails')->name('contact-us');
// Route::get('/project', 'ProjectController@project')->name('project');
// Route::get('/project', 'ProjectController@project')->name('project');
// Route::get('/{category}', 'ProjectController@projectCategory')->name('projectCategory');
// Route::post('/storeMessage', 'ContactDetailController@storeMessage')->name('storeMessage');
