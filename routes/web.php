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

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');

Route::get('/invite', function () {
    return view('invite');
});

Route::get('user/{id}', 'InviteController@show');
