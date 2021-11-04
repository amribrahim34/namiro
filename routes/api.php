<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// users
Route::prefix('/users')->group(function () {
    Route::post('/login', 'Api\LoginController@login');
});

Route::middleware('auth:api')->get('products', 'Api\ProductController@index');
Route::middleware('auth:api')->post('products/search', 'Api\ProductController@search');
