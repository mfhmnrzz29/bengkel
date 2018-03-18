<?php

Route::get('/', function () {
    return redirect('home');
});

Route::group(['middleware'=>'cors'],function(){
	Route::get('/contoh','TestingController@api');
	Route::get('/laporbeli','ApiController@pembelian');
	Route::get('/laporjual','ApiController@penjualan');
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
Route::post('/laporanpenjualan/detail', 'LaporanPenjualan@index3');
Route::post('/laporanpenjualan/detail2', 'LaporanPenjualan@index2');

Route::get('/laporanpenjualan/downloadExcel/{type}', 'LaporanPenjualan@downloadExcel');

Route::get('/laporanpembelian', 'LaporanPembelian@index');
Route::post('/laporanpembelian/detail', 'LaporanPembelian@index3');
Route::post('/laporanpembelian/detail2', 'LaporanPembelian@index2');

Route::get('/laporanpembelian/downloadExcel/{type}', 'LaporanPembelian@downloadExcel');

});

Auth::routes();