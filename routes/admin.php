<?php

Route::get('/', function () {
    return view('admin.index');
});

Route::namespace('Admin')->group(function(){
	// Route::name('calculations.')->namespace('Calculations')->prefix('calculations')->group(function(){
	// 	Route::resource('sales', 'SalesController');
	// 	Route::resource('offer', 'OfferController');
	// 	Route::resource('stock', 'StockController');
	// });
	// Route::name('customers.')->namespace('Customers')->prefix('customers')->group(function(){
	// 	Route::resource('testmony', 'TestmonyController');
	// });
	Route::name('specifications.')->namespace('Specifications')->prefix('specifications')->group(function(){
		Route::resource('color', 'ColorController');
		Route::resource('material', 'MaterialController');
		Route::resource('size', 'SizeController');
	});
	// Route::name('processes.')->namespace('Processes')->prefix('processes')->group(function(){
	// 	Route::resource('cart', 'CartController');
	// 	Route::resource('wish', 'WishController');
	// 	Route::resource('order', 'OrderController');
	// });
	Route::name('products.')->namespace('Products')->prefix('products')->group(function(){
		Route::resource('category', 'CategoryController');
		Route::resource('subcategory', 'SubcategoryController');
		Route::resource('product', 'ProductController');
	});
	// Route::name('feedback.')->namespace('Feedback')->prefix('feedback')->group(function(){
	// 	Route::resource('rate', 'RateController');
	// 	Route::resource('review', 'ReviewController');
	// });

});
?>