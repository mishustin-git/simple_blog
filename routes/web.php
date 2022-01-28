<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::get('/', 'App\Http\Controllers\ArticlesController@view_all');
Route::get('article', 'App\Http\Controllers\ArticlesController@view_all');
Route::get('article/last', 'App\Http\Controllers\ArticlesController@view_last');
Route::get('article/{id}', 'App\Http\Controllers\ArticlesController@view_article');
Route::get('create', 'App\Http\Controllers\ArticlesController@create');
Route::post('article/store', 'App\Http\Controllers\ArticlesController@store')->name("article.store");
