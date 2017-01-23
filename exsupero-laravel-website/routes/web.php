<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('what-we-do', 'WhatWeDoController@whatwedo');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
