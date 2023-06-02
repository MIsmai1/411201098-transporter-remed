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
    //Kurir
    Route::get('getKurir', 'KurirController@getKurir');
    Route::post('createKurir', 'KurirController@createKurir');
    Route::post('updateKurir', 'KurirController@updateKurir');
    Route::get('deleteKurir/{id}', 'KurirController@deleteKurir');

    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    //Barang
    Route::get('getBarang', 'BarangController@getBarang');
    Route::post('createBarang', 'BarangController@createBarang');
    Route::post('updateBarang', 'BarangController@updateBarang');
    Route::get('deleteBarang/{id}', 'BarangController@deleteBarang');

    //Lokasi
    Route::get('getLokasi', 'LokasiController@getLokasi');
    Route::post('createLokasi', 'LokasiController@createLokasi');
    Route::post('updateLokasi', 'LokasiController@updateLokasi');
    Route::get('deleteLokasi/{id}', 'LokasiController@deleteLokasi');

    //Pengiriman
    Route::get('getPengiriman', 'PengirimanController@getPengiriman');
    Route::post('createPengiriman', 'PengirimanController@createPengiriman');
    Route::post('approvePengiriman', 'PengirimanController@approvePengiriman');
    Route::post('updatePengiriman', 'PengirimanController@updatePengiriman');
    Route::get('deletePengiriman/{id}', 'PengirimanController@deletePengiriman');
    

    Route::post('kurirs', 'KurirController@store');
    Route::get('kurirs', 'KurirController@index');