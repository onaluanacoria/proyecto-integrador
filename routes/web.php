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


Route::get('/category/{id}', 'ProductController@category');
// Route::get('/gift/categories', 'CategoryController@index');

// Route::get('/category/{category_id}', 'CategoryController@index')->name('categories');

Route::get('/', 'ProductController@giftindex')->name('index');



Route::get('/gifts', 'ProductController@index')->name('gifts');
Route::get('/gifts/search','ProductController@search')->name('search');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');


Route::get('/cart', 'CartController@index')->middleware(['auth']);
Route::post('/addtocart', 'CartController@store')->middleware(['auth']);
Route::get('/delete/{id}', 'CartController@destroy')->middleware(['auth']);


Route::get('/gift/{id}', 'ProductController@show'); //Mostramos 1 producto

Route::get('/faqs', 'PagesController@fqaa')->name('FQaA');



Auth::routes();

Route::middleware(['auth'])->group(function(){

      //productos

      Route::get('/addgift', 'ProductController@create')->name('add.gift')
      ->middleware('can:add.gift');

      Route::post('/addgift', 'ProductController@store')->name('add.gift')
      ->middleware('can:add.gift');

      Route::post('/editgift/{id}', 'ProductController@edit')->name('editGift')
      ->middleware('can:gift.edit');

      Route::get('/editgift/{id}', 'ProductController@update')->name('editGift')
      ->middleware('can:gift.edit');

      Route::get('/deletegift/{id}', 'ProductController@destroy')->name('deletegift')
      ->middleware('can:gift.destroy');

      //categorias


      Route::get('/addcategory', 'CategoryController@create')->name('addcategory')
      ->middleware('can:addcategory');
      Route::post('/addcategory', 'CategoryController@store')
      ->middleware('can:addcategory');

});
