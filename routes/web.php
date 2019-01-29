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


//require __DIR__ . '/posts/posts.php';

Route::group(['prefix' => 'posts'], function() {
    Route::view('/', 'posts.index');
    Route::view('/create', 'posts.create');
    Route::view('/{post}/edit', 'posts.edit');
});
