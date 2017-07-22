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

Route::get('productos', function () {
    return view('frontend.products');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/productos', 'frontend\CatalogoController@products')->name('productos');



Route::resource('/', "frontend\CatalogoController");
Route::resource('layouts/eminence', "frontend\CatalogoController");
Route::resource('frontend/productos', "frontend\CatalogoController");

Route::group(['middleware' => 'auth'], function (){
    Route::resource('catalogues', "CatalogueController");
    Route::resource('catalogues.categories', "CategoryController");
    Route::resource('categories', "CategoryController");
    Route::resource('catalogues.categories.products', "ProductController");
    Route::resource('categories.products', "ProductController");
    Route::resource('products', "ProductController");
});