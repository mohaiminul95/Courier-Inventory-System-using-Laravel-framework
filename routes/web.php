<?php
//phpinfo();
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


Route::post('insertOrupdate_company','companyController@insertOrUpdateCompany');
Route::post('delete_company','companyController@deleteCompany');

Route::get('add_order','companyController@addOrder');

Route::get('add_order','companyController@displayCompanyName');

Route::get('view_company','companyController@displayAllCompany');


Route::get('view_company/{id}','ordersController@selectOrderCompany');

Route::post('insert_order','ordersController@insertOrder');

Route::post('update_order','ordersController@updateOrder');

Route::get('all_orders','ordersController@allOrder');

Route::get('pending_orders','ordersController@viewPendingOrder');

Route::get('shipped_orders','ordersController@viewShippedOrder');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
