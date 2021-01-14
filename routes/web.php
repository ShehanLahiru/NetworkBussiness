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



Route::get('/login', 'Auth\LoginController@showLoginForm')->name('backend.login');
Route::post('/dashboard', 'Auth\LoginController@login')->name('backend.login.submit');
Route::post('/', 'Auth\LoginController@logout')->name('backend.logout');


Route::group(['middleware' => 'auth'], function () {

Route::get('/dashboard', 'HomeController@index')->name('backend.dashboard');

Route::resource('users', 'UserController', ['as' => 'backend']);

Route::get('/view/{id}', 'UserController@view')->name('view');
Route::post('/add', 'AccountController@add')->name('account.add');
Route::post('/changeStatus/{id}', 'AccountController@changeStatus')->name('account.changeStatus');

Route::post('/changeStatus/{id}', 'WithdrawController@changeStatus')->name('withdraw.changeStatus');


// Route::resource('projects', 'ProjectController', ['as' => 'backend']);

// Route::resource('mainImages', 'MainImageController', ['as' => 'backend']);
// Route::resource('customers', 'CustomerController', ['as' => 'backend']);
// // Route::resource('contactDetails', 'ContactDetailController', ['as' => 'backend']);
// Route::resource('services', 'ServicesController', ['as' => 'backend']);
// Route::post('/messageSearchByDate', 'CustomerController@messageSearchByDate')->name('backend.messageSearchByDate');

});
Route::resource('withdraw', 'WithdrawController');
Route::resource('account', 'AccountController');



Route::get('/', 'HomeController@home')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/contact_us', 'ContactDetailController@contactDetails')->name('contact-us');
Route::get('/about_us', 'ContactDetailController@aboutus')->name('about-us');
Route::get('/videoes', 'VideoController@videoes')->name('videoes');
Route::get('/marketing', 'AccountController@marketing')->name('marketing');
Route::get('/accounts', 'AccountController@account')->name('accounts');




// Route::get('/project', 'ProjectController@project')->name('project');
// Route::get('/{category}', 'ProjectController@projectCategory')->name('projectCategory');
// Route::post('/storeMessage', 'ContactDetailController@storeMessage')->name('storeMessage');
