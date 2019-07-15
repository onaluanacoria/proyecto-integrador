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
Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show'); //Mostramos 1 producto
Route::get('/cart', 'CartController@index'); //Mostramos el carrito abierto.
Route::post('/addtocart', 'CartController@store'); //Guardamos productos en tabla cart.
Route::get('/delete/{id}', 'CartController@destroy'); //Borramos productos del carrito.
Route::get('/addgift', 'ProductController@create');//creamos productos
Route::post('/addgift', 'ProductController@store');
Route::get('/products/search','ProductController@search');//buscador
Route::get('/deletegift/{id}','productController@destroy');//eliminamos productos



Route::get('/aboutUs/{nombre?}', function ($nombre = null) {
    $equipo = ['Ona Coria', 'Eric Rago', 'Francisco Ochandorena', 'Javier Ter?'];
    return view('aboutus', compact('equipo', 'nombre'));
})->name('aboutUs');

Route::get('/faqs', 'PagesController@fqaa')->name('FQaA');

Route::get('/categorias/{id?}', 'PagesController@categorias')->name('categorias');

Route::get('/regalo/{id?}', function () {
    return view('productos');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
