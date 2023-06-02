<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', 'AuthController@login');


Route::group([

    'middleware' => ['api', 'jwt.verify'],

], function ($router) {

    //Kurir
    Route::get('getKurir', 'KurirController@getKurir');
    Route::post('updateKurir', 'KurirController@updateKurir');
    Route::get('deleteKurir/{id}', 'KurirController@deleteKurir');
    Route::post('createKurir', 'KurirController@createKurir');


    Route::post('logout', 'AuthController@logout');

    //Pengiriman
    Route::get('getPengiriman', 'PengirimanController@getPengiriman');
    Route::post('createPengiriman', 'PengirimanController@createPengiriman');
    Route::post('approvePengiriman', 'PengirimanController@approvePengiriman');
    Route::post('updatePengiriman', 'PengirimanController@updatePengiriman');
    Route::get('deletePengiriman/{id}', 'PengirimanController@deletePengiriman');

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


    Route::post('kurirs', 'KurirController@store');
    Route::get('kurirs', 'KurirController@index');

});

