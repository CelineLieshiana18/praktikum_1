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


Route::get('/insertUser','App\Http\Controllers\UserController@insertUser')->name('insertUser');
Route::get('/updateUser/{id}','App\Http\Controllers\UserController@updateUser')->name('updateUser');
Route::get('/deleteUser/{id}','App\Http\Controllers\UserController@deleteUser')->name('deleteUser');
Route::get('/getAllUser','App\Http\Controllers\UserController@getAllUser')->name('getAllUser');
Route::get('/getOneUser/{id}','App\Http\Controllers\UserController@getOneUser')->name('getOneUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});