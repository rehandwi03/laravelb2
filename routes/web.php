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
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/kategori/index', 'KategoriController@index')->name('kategori.index');

Route::get('/produk/index', 'ProdukController@index')->name('produk.index');
Route::get('/produk/create', 'ProdukController@create')->name('produk.create');