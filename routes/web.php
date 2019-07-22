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


Route::get('/', 'PagesController@index')->name('home');


Route::get('/gifts', 'ProductController@index');
Route::get('/gifts/{id}', 'ProductController@show'); //Mostramos 1 producto

Route::get('/cart', 'CartController@index'); //Mostramos el carrito abierto.
Route::post('/addtocart', 'CartController@store'); //Guardamos productos en tabla cart.
Route::get('/delete/{id}', 'CartController@destroy'); //Borramos productos del carrito.

Route::get('/addgift', 'ProductController@create');//creamos productos
Route::post('/addgift', 'ProductController@store');//
Route::get('/gifts/search','ProductController@search');//buscador
Route::get('/deletegift/{id}','productController@destroy');//eliminamos productos

Route::get('/categories', 'CategoryController@index');
Route::get('/category/{id}', 'CategoryController@show'); //Mostramos 1 producto
Route::get('/addcategory', 'CategoryController@create');
Route::post('/addcategory', 'CategoryController@store');//creamos categorias


Route::get('/aboutUs/{nombre?}', function ($nombre = null) {
    $equipo = ['Ona Coria', 'Eric Rago', 'Francisco Ochandorena', 'Javier Ter?'];
    return view('aboutus', compact('equipo', 'nombre'));
})->name('aboutUs');
Route::get('/faqs', 'PagesController@fqaa')->name('FQaA');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
