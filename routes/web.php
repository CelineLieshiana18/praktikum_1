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
Route::post('/Odata', 'App\Http\Controllers\UserController@Odata')->name('Odata');
Route::get('/allPeople', 'App\Http\Controllers\UserController@allPeople')->name('allPeople');
Route::get('/xml', 'App\Http\Controllers\UserController@xml')->name('xml');
Route::get('/json', 'App\Http\Controllers\UserController@json')->name('json');

Route::post('/client2POST', 'App\Http\Controllers\UserController@client2POST')->name('client2POST');
Route::get('/client2/{nama}', 'App\Http\Controllers\UserController@client2')->name('client2');
Route::get('/server2', 'App\Http\Controllers\UserController@server2')->name('server2');


Route::get('/insertUser','App\Http\Controllers\UserController@insertUser')->name('insertUser');
Route::get('/updateUser/{id}','App\Http\Controllers\UserController@updateUser')->name('updateUser');
Route::get('/deleteUser/{id}','App\Http\Controllers\UserController@deleteUser')->name('deleteUser');
Route::get('/getAllUser','App\Http\Controllers\UserController@getAllUser')->name('getAllUser');
Route::get('/getOneUser/{id}','App\Http\Controllers\UserController@getOneUser')->name('getOneUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});