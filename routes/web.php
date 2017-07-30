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
    return view('index');
});

Route::resource('/barang', 'BarangController');
Route::resource('/jasa', 'JasaController');
Route::resource('/pelanggan', 'PelangganController');
Route::resource('/supplier', 'SupplierController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
