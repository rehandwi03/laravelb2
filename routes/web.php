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
Route::post('/kategori/store', 'KategoriController@store')->name('kategori.store');
Route::delete('/kategori/destroy/{id}', 'KategoriController@destroy')->name('kategori.destroy');

Route::get('/produk/index', 'ProdukController@index')->name('produk.index');
Route::get('/produk/create', 'ProdukController@create')->name('produk.create');
Route::post('/produk/store', 'ProdukController@store')->name('produk.store');
Route::get('/produk/edit/{id}', 'ProdukController@edit')->name('produk.edit');
Route::put('/produk/update/{id}', 'ProdukController@update')->name('produk.update'); 