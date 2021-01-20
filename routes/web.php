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
    Route::group(['middleware' => 'Admin'], function () {

        Route::get('/dashboard', 'HomeController@index')->name('backend.dashboard');
        Route::post('/withdrawChangeStatus/{id}', 'WithdrawController@changeStatus')->name('withdraw.changeStatus');
        Route::post('/payBillChangeStatus/{id}', 'PayBillController@changeStatus')->name('payBill.changeStatus');
        Route::post('/reloadChangeStatus/{id}', 'ReloadController@changeStatus')->name('reload.changeStatus');
        Route::resource('product', 'ProductController');
        Route::resource('withdraw', 'WithdrawController');
        Route::resource('account', 'AccountController');
        Route::resource('productCategory', 'ProductCategoryController');
        Route::resource('payBill', 'PayBillController');
        Route::resource('reload', 'ReloadController');
        Route::resource('loan', 'LoanController');
        Route::post('/accountChangeStatus/{id}', 'AccountController@changeStatus')->name('account.changeStatus');
        Route::post('/loanChangeStatus/{id}', 'LoanController@changeStatus')->name('loan.changeStatus');
        Route::post('/searchByDate/{model}', 'SearchController@searchByDate')->name('backend.searchByDate');

    });



Route::resource('users', 'UserController', ['as' => 'backend']);

Route::get('/view/{id}', 'UserController@view')->name('view');
Route::post('/add', 'AccountController@add')->name('account.add');



Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/accounts', 'AccountController@account')->name('accounts');
Route::post('/payBills', 'PayBillController@addBill')->name('payBills');
Route::post('/reloads', 'ReloadController@addReload')->name('reloads');
Route::post('/loans', 'LoanController@addLoan')->name('loans');
Route::resource('customers', 'CustomerController', ['as' => 'backend']);




// Route::resource('projects', 'ProjectController', ['as' => 'backend']);
// Route::resource('mainImages', 'MainImageController', ['as' => 'backend']);
// Route::resource('customers', 'CustomerController', ['as' => 'backend']);
// // Route::resource('contactDetails', 'ContactDetailController', ['as' => 'backend']);
// Route::resource('services', 'ServicesController', ['as' => 'backend']);
Route::post('/messageSearchByDate', 'CustomerController@messageSearchByDate')->name('backend.messageSearchByDate');

});




Route::get('/', 'HomeController@home')->name('home');
Route::resource('register', 'RegisterController');


Route::get('/contact_us', 'ContactDetailController@contactDetails')->name('contact-us');
Route::get('/about_us', 'ContactDetailController@aboutus')->name('about-us');
Route::get('/products/{id}', 'ProductController@product')->name('products');
Route::get('/productCategories', 'ProductCategoryController@productCategories')->name('productCategories');

Route::get('/videoes', 'VideoController@videoes')->name('videoes');
Route::get('/marketing', 'AccountController@marketing')->name('marketing');
Route::get('/billing', 'PayBillController@billing')->name('billing');

Route::get('/registerWithUs&&234/{id}', 'RegisterController@refferelRegistration');


// Route::get('/{category}', 'ProjectController@projectCategory')->name('projectCategory');
Route::post('/storeMessage', 'ContactDetailController@storeMessage')->name('storeMessage');
