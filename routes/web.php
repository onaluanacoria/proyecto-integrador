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


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ProductController@giftindex')->name('index');
// Route::get('/', 'CategoryController@index')->name('home');
// Route::get('/gift/category/{category_id}', 'ProductController@filter');

Route::get('/gifts', 'ProductController@index');
Route::get('/gifts/search','ProductController@search');//buscador

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');


Route::get('/cart', 'CartController@index'); //Mostramos el carrito abierto.
Route::post('/addtocart', 'CartController@store'); //Guardamos productos en tabla cart.
Route::get('/delete/{id}', 'CartController@destroy'); //Borramos productos del carrito.


Route::get('/gift/{id}', 'ProductController@show'); //Mostramos 1 producto




Route::get('/gift/categories', 'CategoryController@index');
// Route::get('/category/{id}', 'CategoryController@show'); //Mostramos 1 producto
Route::get('/addcategory', 'CategoryController@create');
Route::post('/addcategory', 'CategoryController@store');//creamos categorias
Route::get('/deletecategory/{id}','CategoryController@destroy');//eliminamos productos

// Route::get('/category/{id}','CategoryController@categoryProducts');



Route::get('/aboutUs/{nombre?}', function ($nombre = null) {
    $equipo = ['Ona Coria', 'Eric Rago', 'Francisco Ochandorena', 'Javier Ter?'];
    return view('aboutus', compact('equipo', 'nombre'));
})->name('aboutUs');
Route::get('/faqs', 'PagesController@fqaa')->name('FQaA');



Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::middleware(['auth'])->group(function(){

      //Roles
      Route::post('roles/store', 'RoleController@index')->name('roles.store')
      ->middleware('can:roles.create');

      Route::get('roles', 'RoleController@index')->name('roles.index')
      ->middleware('can:roles.index');

      Route::get('roles/create', 'RoleController@create')->name('roles.create')
      ->middleware('can:roles.create');

      Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
      ->middleware('can:roles.edit');

      Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
      ->middleware('can:roles.show');

      Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
      ->middleware('can:roles.destroy');

      Route::get('roles/{role}', 'RoleController@edit')->name('roles.edit')
      ->middleware('can:roles.edit');


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



      //Users

      Route::get('users', 'UserController@index')->name('users.index')
      ->middleware('can:users.index');

      Route::put('users/{user}', 'UserController@update')->name('users.update')
      ->middleware('can:users.edit');

      Route::get('users/{user}', 'UserController@show')->name('users.show')
      ->middleware('can:users.show');

      Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
      ->middleware('can:users.destroy');

      Route::get('users/{user}', 'UserController@edit')->name('users.edit')
      ->middleware('can:users.edit');
});
