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

Route::get('/home', 'Member\PageController@getHotProduct')->name('home');
Route::get('/category/products/{id}', 'Member\PageController@getProductPageByCategory')->name('category');
Route::get('/brand/products/{id}', 'Member\PageController@getProductPageByBrand')->name('brand');
Route::get('/product/{id}', 'Member\PageController@getProductDetail')->name('product');
Route::get('/search', 'Member\PageController@getSearch')->name('search');