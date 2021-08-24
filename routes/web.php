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
Route::name('specifications.')->namespace('Specifications')->prefix('specifications')->group(function(){
	Route::resource('color', 'ColorController');
	Route::resource('material', 'MaterialController');
	Route::resource('size', 'SizeController');
});
Route::name('processes.')->middleware('auth')->namespace('Processes')->prefix('processes')->group(function(){
	Route::post('carts/update', 'CartController@update')->name('carts.update');
	Route::resource('carts', 'CartController')->except('update');
	Route::resource('wishs', 'WishController');
	Route::resource('orders', 'OrderController');
});
Route::name('products.')->namespace('Products')->prefix('products')->group(function(){
	Route::resource('category', 'CategoryController');
	Route::resource('subcategory', 'SubcategoryController');
	Route::resource('product', 'ProductController');
	Route::post('product/search', 'ProductController@search')->name('product.search');
	Route::name('filter.')->prefix('filter')->group(function(){
		Route::get('category/{category}', 'FilterController@CategoryFilter')->name('category');
		Route::get('color/{color}', 'FilterController@ColorFilter')->name('color');
		Route::get('size/{size}', 'FilterController@SizeFilter')->name('size');
	});
});
Route::name('feedback.')->namespace('Feedback')->prefix('feedback')->group(function(){
	Route::resource('rate', 'RateController');
	Route::resource('review', 'ReviewController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
