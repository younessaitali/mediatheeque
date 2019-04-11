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


/* like this
Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('/chekout', 'chekout_con');
Route::resource('/wish', 'wish_con');
Route::get('/test', 'public_con@test');
Route::resource('/product', 'products_con');
Route::resource('/user', 'user_con');
Route::get('/categories', 'public_con@categories');
Route::resource('/cart', 'cart_con');
Route::get('/', 'public_con@index');
Route::get('/about', 'public_con@about');
Route::get('/contact', 'public_con@contact');
Route::get('/shop', 'public_con@shop')->name('shop.index');
Route::get('/event', 'public_con@event');
Route::get('/hadik', 'public_con@hadik');
Route::get('/acount', 'public_con@acount');
Route::get('/categories/movies', 'public_con@movies')->name('movies');
Route::get('/categories/books', 'public_con@books')->name('books');
Route::get('/categories/journal', 'public_con@journal')->name('journal');
Route::get('/categories/magazins', 'public_con@magazins')->name('magazins');

// test