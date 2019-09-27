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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// customer route
Route::get('/customer/create', 'CustomerController@create');
Route::get('/customer', 'CustomerController@show');
Route::resource('customer', 'CustomerController');

//distributor route
Route::get('/distributor/create', 'DistributorController@create');
Route::get('/distributor', 'DistributorController@show');
Route::resource('distributor', 'DistributorController');

//variant route
Route::get('/variant/create', 'VariantController@create');
Route::get('/variant', 'VariantController@show');
Route::resource('variant', 'VariantController');


//material category route
Route::get('/material_category/create', 'Material_CategoryController@create');
Route::get('/material_category', 'Material_CategoryController@show');
Route::resource('material_category', 'Material_CategoryController');

//material order route
Route::get('/material_order/create', 'Material_OrderController@create');
Route::get('/material_order', 'Material_OrderController@show');
Route::resource('material_order', 'Material_OrderController');

//purchase order route
Route::get('/purchase_order/create', 'Purchase_OrderController@create');
Route::get('/purchase', 'Purchase_OrderController@show');
Route::resource('purchase_order', 'Purchase_OrderController');

//product category route
Route::get('/product_category/create', 'Product_CategoryController@create');
Route::get('/product_category', 'Product_CategoryController@show');
Route::resource('product_category', 'Product_CategoryController');

//product order route
Route::get('/product_order/create', 'Product_OrderController@create');
Route::get('/product_order', 'Product_OrderController@show');
Route::resource('product_order', 'Product_OrderController');

//stock order route
Route::get('/stock_order/create', 'Stock_OrderController@create');
Route::resource('stock_order', 'Stock_OrderController');
