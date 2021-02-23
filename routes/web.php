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

Route::get('/', 'PageController@home')->name('home');

Route::resource('article', 'ArticleController');
Route::resource('category', 'CategoryController');

Route::get('articleList_api', 'PageController@articleList_api')->name('articleList_api');
Route::get('categoryList_api', 'PageController@categoryList_api')->name('categoryList_api');
Route::get('tagList_api', 'PageController@tagList_api')->name('tagList_api');