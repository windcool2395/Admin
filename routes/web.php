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

Route::get('/','HomeController@index');
Route::get('admin', function () {
    return view('admin.dashboard');
});

Route::resource('admin/category','Admin\\CategoryController');


Route::resource('admin/product','Admin\\ProductController');


Route::get('upload','UploadController@index');
Route::get('upload/create','UploadController@create');
Route::post('upload','UploadController@store');

Route::resource('cart','CartController');

Route::resource('order','OrderController');

Route::resource('product','ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index');
