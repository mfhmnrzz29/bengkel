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
    return redirect('home');
});

Route::group(['middleware'=>['auth']], function(){
Route::get('/home', 'HomeController@index')->name('home');	
Route::resource('/barang', 'BarangController');
Route::resource('/jasa', 'JasaController');
Route::resource('/pelanggan', 'PelangganController');
Route::resource('/supplier', 'SupplierController');
Route::resource('/pembelian', 'PembelianController');
Route::resource('/penjualan', 'PenjualanController');
});

Route::group(['middleware'=>['auth', 'role:owner']], function(){
Route::resource('/karyawan', 'KaryawanController');

Route::get('/laporanpenjualan', 'LaporanPenjualan@index');
Route::post('/laporanpenjualan/detail', 'LaporanPenjualan@index2');

Route::get('/laporanpembelian', 'LaporanPembelian@index');
Route::post('/laporanpembelian/detail', 'LaporanPembelian@index2');
});

Auth::routes();

