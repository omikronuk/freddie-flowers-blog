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

/*

Route::middleware('auth')->group(function () {
    Route::group(['namespace' => 'Post'], function() {

        // api
        Route::group(['prefix' => 'api/post'], function() {
            Route::get('/newPost','PostController@create');

            Route::post('/createPost','PostController@store');

            Route::patch('/updatePost', 'ProfileController@updateAuthUser');
        });
    });
});

*/
