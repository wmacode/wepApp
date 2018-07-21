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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('login', 'AuthController@login');
    Route::middleware('auth:api')->group(function(){
        Route::post('logout',  'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me',      'AuthController@me');
    });
});

Route::middleware('auth:api')->group(function () {
	Route::get('product', 'ProductController@findAll');
	Route::get('product/{id}', 'ProductController@find');
	Route::post('product', 'ProductController@create');
	Route::put('product', 'ProductController@update');
	Route::delete('product/{id}', 'ProductController@delete');

	Route::get('category', 'CategoryController@findAll');
	Route::get('category/{id}', 'CategoryController@find');
	Route::post('category', 'CategoryController@create');
	Route::put('category', 'CategoryController@update');
	Route::delete('category/{category_id}', 'CategoryController@delete');
});


