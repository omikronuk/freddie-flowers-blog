<?php

Route::group(['prefix' => 'posts'], function() {
    Route::post('/store', 'PostController@store');
    Route::put('/update/{post}', 'PostController@update');
    Route::delete('/{post}', 'PostController@destroy');
});

Route::middleware('auth')->group(function () {
    Route::group([], function() {
        // views



        // api
        Route::group(['prefix' => 'api/posts'], function() {
            Route::post('/store', 'PostController@store');
            Route::put('/update/{post}', 'PostController@update');
            Route::delete('/{post}', 'PostController@destroy');
        });
    });
});
