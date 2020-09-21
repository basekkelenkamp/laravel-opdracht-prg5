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

Route::get('/news', 'newsController@all')->name('news');
Route::get('/news/add', 'newsController@add')->name('add');
route::get('/news/detail/{id}', 'newsController@show')->name('news.link');


