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

Route::get('articles', 'ArticleController@index')->name('articles.index'); // READ

Route::get('articles/create', 'ArticleController@create')->name('articles.create');  //Create
Route::post('articles/store', 'ArticleController@store')->name('articles.store');    //Store

Route::get('articles/update', 'ArticleController@update')->name('articles.update');  //Update
Route::get('articles/destroy', 'ArticleController@destroy')->name('articles.destroy'); //Delete
