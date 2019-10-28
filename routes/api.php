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

Route::middleware('auth:api')->group(function () {
    Route::group(['prefix'=>'invite'], function(){
        Route::get('/', 'InviteController@index');
        Route::post('/', 'InviteController@store');
        Route::delete('/{invite}', 'InviteController@delete');
        Route::put('/accept/{invite}', 'InviteController@accept');
        Route::put('/decline/{invite}', 'InviteController@decline');
    });
    Route::group(['prefix'=>'user'], function(){
        Route::get('/{user}', 'UserController@show');
        Route::get('/index', 'UserController@index');
    });
});

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');

Route::middleware('auth:api')->group(function () {
	Route::get('user', 'PassportController@details');

	Route::resource('products', 'ProductController');
});
