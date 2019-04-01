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

Route::resource('/user', 'user_con');
Route::get('/categories', 'public_con@categories');

Route::get('/chekout', 'user_con@chekout');
 Route::get('/cart', 'public_con@cart');
 Route::get('/', 'public_con@index');
 Route::get('/about', 'public_con@about');
 Route::get('/contact', 'public_con@contact');
 Route::get('/event', 'public_con@event');
 Route::get('/hadik', 'public_con@hadik');
 Route::get('/acount', 'public_con@acount');
 Route::get('/categories/movies', 'public_con@movies');
 Route::get('/categories/books', 'public_con@books');
 Route::get('/inscription', 'public_con@inscription');
 Route::get('/categories/journal', 'public_con@journal');
 Route::get('/categories/magazins', 'public_con@magazins');
 Route::namespace('Admin')->prefix('admin')->group(function () {
     Route::get('user/{userid}/{name}', 'user_con@index');
 });
// test
