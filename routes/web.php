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

Route::get('/index', 'MessageController@index')->name('message.index');
Route::get('/', 'MessageController@top')->name('message.top');
Route::get('/new', 'MessageController@create')->name('message.create');
Route::post('/new', 'MessageController@store')->name('message.store');
Route::get('/edit/{id}', 'MessageController@edit')->name('message.edit');
Route::post('/edit', 'MessageController@update')->name('message.update');
Route::get('/show/{id}', 'MessageController@show')->name('message.show');
Route::post('/delete', 'MessageController@destroy')->name('message.delete');