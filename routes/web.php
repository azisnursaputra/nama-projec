<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', 'App\Http\Controllers\BookController@index');
Route::get('/book/create', 'App\Http\Controllers\BookController@create');
Route::get('/book/edit', 'App\Http\Controllers\BookController@edit');
Route::get('/book/update', 'App\Http\Controllers\BookController@update');
Route::get('/book/delete', 'App\Http\Controllers\BookController@destroy');

Route::get('/item/create', 'App\Http\Controllers\ItemController@insertPage');
Route::post('/item/post', 'App\Http\Controllers\ItemController@insert');
