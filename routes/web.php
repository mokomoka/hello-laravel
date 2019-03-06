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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/messages/index', 'MessageController@index')->name('message.index');
Route::get('/message/{id}', 'MessageController@show')->name('message.show');
Route::get('/messages', 'MessageController@top')->name('message.top');
Route::get('/messages/new', 'MessageController@create')->name('message.create');
Route::post('/messages/new', 'MessageController@store')->name('message.store');

Route::get('/message/list', 'MessageController@list');