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
Route::get('/guestchekout', 'chekout_con@guest')->name('guestchekout');
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
Route::get('/facture', 'public_con@invoice')->name('invoice');
Route::resource('/invoices', 'invoice_con');


// test

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/sjkghd', 'public_con@test2')->name('test');
//admin pages------------------admin pages-------------admin pages-----------admin pages 
//pages -----------pages---------------pages----------pages---------------pages

Route::group(['prefix' => 'admin'], function () {

    //categorie--------------categorie------------categorie
    Route::get('/categories', 'admin_categories_controller@index')->name('admin.categorie');
    Route::delete('/categories/{id}', 'admin_categories_controller@destroy')->name('admin.categorie.delet');
    Route::GET('/categories/{id}/edite', 'admin_categories_controller@edit')->name('admin.categorie.edite');
    Route::Patch('/categories/{id}', 'admin_categories_controller@update')->name('admin.categorie.update');
    Route::GET('/categories/create', 'admin_categories_controller@create')->name('admin.categorie.create');
    Route::POST('/categories', 'admin_categories_controller@store')->name('admin.categorie.store');


    //shippers---------------shippers-----------------shippers
    Route::get('/shippers', 'admin_shippers_controller@index')->name('admin.shipper');
    Route::delete('/shippers/{id}', 'admin_shippers_controller@destroy')->name('admin.shipper.delet');
    Route::GET('/shippers/{id}/edite', 'admin_shippers_controller@edit')->name('admin.shipper.edite');
    Route::Patch('/shippers/{id}', 'admin_shippers_controller@update')->name('admin.shipper.update');
    Route::GET('/shippers/create', 'admin_shippers_controller@create')->name('admin.shipper.create');
    Route::POST('/shippers', 'admin_shippers_controller@store')->name('admin.shipper.store');



    //penaltys----------penaltys--------------------penaltys----------------penaltys
    Route::get('/panaltys', 'admin_penaltys_controller@index')->name('admin.penaltys');
    Route::delete('/panaltys/{id}', 'admin_penaltys_controller@destroy')->name('admin.penaltys.delet');
    Route::GET('/panaltys/{id}/edite', 'admin_penaltys_controller@edit')->name('admin.penaltys.edite');
    Route::Patch('/panaltys/{id}', 'admin_penaltys_controller@update')->name('admin.penaltys.update');
    Route::GET('/panaltys/create', 'admin_penaltys_controller@create')->name('admin.penaltys.create');
    Route::POST('/panaltys', 'admin_penaltys_controller@store')->name('admin.penaltys.store');

    //product------------product----------product---------------
    Route::get('/product', 'admin_product_controller@index')->name('admin.product');
    Route::delete('/product/{id}', 'admin_product_controller@destroy')->name('admin.product.delet');
    Route::GET('/product/{id}/edite', 'admin_product_controller@edit')->name('admin.product.edite');
    Route::Patch('/product/{id}', 'admin_product_controller@update')->name('admin.product.update');
    Route::GET('/product/create', 'admin_product_controller@create')->name('admin.product.create');
    Route::POST('/product', 'admin_product_controller@store')->name('admin.product.store');
});
