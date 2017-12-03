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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','MyController@mymethod');

Route::get('article/{id}','MyController@articlemethod')->name('article_articlemethod');

Route::post('add', 'MyController@add')->name('addpost');

Route::get('add_post','MyController@add_post');
Route::post('add_post', 'MyController@add_post_data')->name('add_post_data');