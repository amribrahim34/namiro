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
Route::name('calculations.')->namespace('Calculations')->prefix('calculations')->group(function(){
	Route::resource('sales', 'SalesController');
	Route::resource('offer', 'OfferController');
	Route::resource('stock', 'StockController');
});
Route::name('customers.')->namespace('Customers')->prefix('customers')->group(function(){
	Route::resource('testmony', 'TestmonyController');
});
Route::name('informations.')->namespace('Informations')->prefix('informations')->group(function(){
	Route::resource('color', 'ColorController');
	Route::resource('material', 'MaterialController');
	Route::resource('size', 'SizeController');
});
Route::name('processes.')->namespace('Processes')->prefix('processes')->group(function(){
	Route::resource('cart', 'CartController');
	Route::resource('wish', 'WishController');
	Route::resource('order', 'OrderController');
});
Route::name('products.')->namespace('Products')->prefix('products')->group(function(){
	Route::resource('category', 'CategoryController');
	Route::resource('subcategory', 'SubcategoryController');
	Route::resource('product', 'ProductController');
});
Route::name('rates.')->namespace('Rates')->prefix('rates')->group(function(){
	Route::resource('rate', 'RateController');
	Route::resource('review', 'ReviewController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
