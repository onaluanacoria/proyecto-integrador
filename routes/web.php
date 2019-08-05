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


Route::get('/categoria/{id}', 'ProductController@categoria');
// Route::get('/gift/categories', 'CategoryController@index');

// Route::get('/category/{category_id}', 'CategoryController@index')->name('categories');

Route::get('/', 'ProductController@giftindex')->name('index');



Route::get('/gifts', 'ProductController@index')->name('gifts');
Route::get('/gifts/search','ProductController@search');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');


Route::get('/cart', 'CartController@index'); //Mostramos el carrito abierto.
Route::post('/addtocart', 'CartController@store'); //Guardamos productos en tabla cart.
Route::get('/delete/{id}', 'CartController@destroy'); //Borramos productos del carrito.


Route::get('/gift/{id}', 'ProductController@show'); //Mostramos 1 producto




// Route::get('/category/{id}', 'CategoryController@show'); //Mostramos 1 producto
Route::get('/addcategory', 'CategoryController@create');
Route::post('/addcategory', 'CategoryController@store');//creamos categorias
Route::get('/deletecategory/{id}','CategoryController@destroy');//eliminamos productos






Route::get('/faqs', 'PagesController@fqaa')->name('FQaA');



Auth::routes();

Route::middleware(['auth'])->group(function(){

      //productos

      // Route::get('/addgift', 'ProductController@create');//creamos productos
      // Route::post('/addgift', 'ProductController@store');//
      // Route::get('/gifts/search','ProductController@search');//buscador
      // Route::get('/editgift/{id}','ProductController@showform');
      // Route::post('/editgift/{id}','ProductController@edit');
      // Route::get('/deletegift/{id}','ProductController@destroy');//eliminamos productos

      Route::get('/addgift', 'ProductController@create')->name('addgift')
      ->middleware('can:addgift');

      Route::post('/addgift', 'ProductController@store')->name('addgift')
      ->middleware('can:add.gift');

      // Route::get('gifts', 'ProductController@index')->name('gifts')
      // ->middleware('can:gifts.index');

      Route::post('/editgift/{id}', 'ProductController@edit')->name('editGift')
      ->middleware('can:gift.edit');

      Route::get('/editgift/{id}', 'ProductController@update')->name('editGift')
      ->middleware('can:gift.edit');

      // Route::get('/gift/{id}', 'ProductController@show')->name('gift.show')
      // ->middleware('can:gift.show');

      Route::get('/deletegift/{id}', 'ProductController@destroy')->name('deletegift')
      ->middleware('can:gift.destroy');


});
