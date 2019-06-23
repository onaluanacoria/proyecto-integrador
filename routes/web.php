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

Route::get('/register/{id?}', 'PagesController@register')->name('registro');

Route::get('/login', 'PagesController@login')->name('login');

Route::get('/aboutUs/{nombre?}', function ($nombre = null) {
    $equipo = ['Ona Coria', 'Eric Rago', 'Francisco Ochandorena', 'Javier Ter?'];
    return view('aboutus', compact('equipo', 'nombre'));
})->name('aboutUs');

Route::get('/faqs', 'PagesController@fqaa')->name('FQaA');

Route::get('/categorias/{id?}', 'PagesController@categorias')->name('categorias');

Route::get('/regalo/{id?}', function () {
    return view('productos');
});

Route::get('/user/{id?}', function () {
    return view('user');
});

Route::get('/carrito/{id?}', function () {
    return view('miCarrito');
});
