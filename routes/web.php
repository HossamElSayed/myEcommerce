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

//Routes of the products
Route::get('/','ProductController@index');
Route::get('/add-to-cart/{id}','ProductController@addToCart')->name('addtocart')->middleware('auth');
Route::get('shopping-cart','ProductController@shoppingCart')->name('shoppingcart')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
