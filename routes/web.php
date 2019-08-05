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





// INDEX
Route::get('/', 'ProductController@giftindex')->name('index');

// REGALOS
Route::get('/gifts', 'ProductController@index')->name('gifts');
Route::get('/gifts/search','ProductController@search')->name('search');
Route::get('/gift/{id}', 'ProductController@show');

//CATEGORIA CON PRODUCTOS
Route::get('/category/{id}', 'ProductController@category')->name('categories');

//PERFIL
Route::get('/profile', 'ProfileController@index')->name('profile')->middleware(['auth']);
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update')->middleware(['auth']);

// CARRITO
Route::get('/cart', 'CartController@index')->middleware(['auth']);
Route::post('/addtocart', 'CartController@store')->middleware(['auth']);
Route::get('/delete/{id}', 'CartController@destroy')->middleware(['auth']);


// PREGUNTAS FRECUENTES
Route::get('/faqs', 'PagesController@fqaa')->name('FQaA');


// RUTAS DE AUTH
Auth::routes();

//MIDDELWARE SHINOBI
Route::middleware(['auth'])->group(function(){

      //REGALOS CRUD ADMIN FUNCIONES
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

      //CATEGORIAS CRUD ADMIN FUNCIONES
Route::get('/addcategory', 'CategoryController@create')->name('addcategory')
->middleware('can:addcategory');

Route::post('/addcategory', 'CategoryController@store')
->middleware('can:addcategory');

});
