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

Route::get('add', 'MyController@add');
Route::post('add', 'MyController@addpost');
