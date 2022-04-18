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

Route::group(['prefix' => 'customers'], function () {
    Route::get('{customerId}/products/history', 'ProductController@getHistoryProducts');
    Route::get('{customerId}/products', 'ProductController@getProducts');
});

Route::group(['prefix' => 'orders'], function () {
    Route::post('', 'OrderController@createOrder');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'customers'], function () {
        Route::get('{customerId}/products', 'Admin\ProductController@getProducts');
        Route::put('{customerId}/products/{productId}', 'Admin\ProductController@updateProduct');
    });
});
