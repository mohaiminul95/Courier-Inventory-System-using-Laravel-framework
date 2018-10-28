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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/userpanel', function () {
    return view('add_company');
});


Route::post('insert_company','companyController@insertCompany');

Route::get('add_order','companyController@addOrder');

Route::get('add_order','companyController@displayCompanyName');

Route::get('view_company','companyController@displayAllCompany');

Route::get('view_company/{id}','ordersController@selectOrderCompany');


Route::post('insert_order','ordersController@insertOrder');

Route::get('pending_orders','ordersController@viewPendingOrder');

Route::get('shipped_orders','ordersController@viewShippedOrder');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
