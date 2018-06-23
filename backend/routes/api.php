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

Route::get('category', 'CategoryController@findAll');
Route::post('category', 'CategoryController@create');
Route::put('category', 'CategoryController@update');
Route::delete('category/{category_id}', 'CategoryController@delete');

Route::get('product', 'ProductController@findAll');
Route::post('product', 'ProductController@create');
Route::put('product', 'ProductController@update');
Route::delete('product/{id}', 'ProductController@delete');
