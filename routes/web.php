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

Auth::routes();

Route::get('/', 'PostController@index');
Route::resource('post', 'PostController');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/post/{post}/comment', 'PostController@comments')->name('comments');
//Route::resource('admin', 'AdminController');
