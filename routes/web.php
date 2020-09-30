<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\UserController@index')->name('index');
Route::post('/store', 'App\Http\Controllers\UserController@store')->name('store');
Route::get('/destroy/{id}', 'App\Http\Controllers\UserController@destroy')->name('destroy');
Route::get('/update/{id}', 'App\Http\Controllers\UserController@update')->name('update');
Route::post('/save', 'App\Http\Controllers\UserController@save')->name('save');
