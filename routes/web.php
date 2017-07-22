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

Route::get('/', function () {
    return view('frontend.home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/catalogos', 'frontend\CatalogoController@catalogos')->name('catalogos');


Route::get('/catalogos/{catalogue}/categorias', 'frontend\CategoriaController@index')->name('categorias');
Route::get('/contacto', 'frontend\CategoriaController@contacto')->name('contacto');
Route::get('/empresaVerde', 'frontend\CategoriaController@empresaVerde')->name('empresaVerde');

Route::get('/catalogos/{catalogue}/categorias/{category}/productos', 'frontend\ProductoController@index')->name('productos');


Route::resource('/', "frontend\CatalogoController");
Route::resource('layouts/eminence', "frontend\CatalogoController");
Route::resource('frontend/catalogos', "frontend\CatalogoController");

Route::group(['middleware' => 'auth'], function (){
    Route::resource('catalogues', "CatalogueController");
    Route::resource('catalogues.categories', "CategoryController");
    Route::resource('categories', "CategoryController");
    Route::resource('catalogues.categories.products', "ProductController");
    Route::resource('categories.products', "ProductController");
    Route::resource('products', "ProductController");
});