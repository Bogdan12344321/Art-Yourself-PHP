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

Route::get('/', 'PostsController@index');
Route::get('/firstpage','PostsController@firstpage');
Route::get('/firstpage/image1','PostsController@image1');
Route::get('/firstpage/create','PostsController@create');
Route::post('/firstpage','PostsController@store');