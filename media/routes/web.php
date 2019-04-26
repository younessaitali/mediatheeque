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
Route::get('/chekout', 'chekout_con@index')->middleware('auth');
Route::post('/chekout', 'chekout_con@store')->name('chekout.store');
Route::get('/guestchekout', 'chekout_con@index')->name('guestchekout');
Route::resource('/wish', 'wish_con');
Route::resource('/shop', 'shop_con');
Route::get('/test', 'public_con@test');
Route::resource('/product', 'products_con');
Route::resource('/user', 'user_con');
Route::get('/categories', 'public_con@categories');
Route::resource('/cart', 'cart_con');
Route::get('/', 'public_con@index');
Route::get('/about', 'public_con@about');
Route::get('/contact', 'public_con@contact');
Route::get('/event', 'public_con@event');
Route::get('/hadik', 'public_con@hadik');
Route::get('/acount', 'public_con@acount');
Route::get('/categories/movies', 'public_con@movies')->name('movies');
Route::get('/categories/books', 'public_con@books')->name('books');
Route::get('/categories/journal', 'public_con@journal')->name('journal');
Route::get('/categories/magazins', 'public_con@magazins')->name('magazins');
Route::get('/login', 'Sessionscontroller@create');
Route::get('/logout', 'Sessionscontroller@create');

// test

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//admin pages 
//pages 

Route::group(['prefix' => 'admin'], function () {

    //categorie
    Route::get('/categories', 'admin_categories_controller@index')->name('admin.categorie');
    Route::delete('/categories/{id}', 'admin_categories_controller@destroy')->name('admin.categorie.delet');
    Route::GET('/categories/{id}/edite', 'admin_categories_controller@edit')->name('admin.categorie.edite');
    Route::Patch('/categories/{id}', 'admin_categories_controller@update')->name('admin.categorie.update');
    Route::GET('/categories/create', 'admin_categories_controller@create')->name('admin.categorie.create');
    Route::POST('/categories', 'admin_categories_controller@store')->name('admin.categorie.store');



    Route::get('/shippers', 'admin_shippers_controller@index')->name('admin.shipper');
    Route::get('/panaltys', 'admin_penaltys_controller@index')->name('admin.penaltys');
});
