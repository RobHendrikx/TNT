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

/**
 * Login
 */
Route::get('login', 'PagesController@getLogin')->name('getLogin');
Route::post('login', 'UserController@postLogin')->name('postLogin');

/**
 * Logout
 */
Route::get('logout', 'UserController@logout')->name('logout');

/**
 * Signup
 */
Route::get('signup', 'PagesController@getSignup')->name('getSignup');
Route::post('signup', 'UserController@postSignup')->name('postSignup');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/', 'PagesController@getIndex')->name('getHome');
});
