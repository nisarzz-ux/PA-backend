<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Tes API 
Route::get('barang','apicontroller@get_all_barang');

//Demografi Get Data
Route::get('demografi','demograficontroller@get_all_demografi');
Route::get('demografiSelect/{id}','demograficontroller@edit');

//September Get Data 
Route::get('septemberTabel','SeptemberController@get_all_data');
Route::get('septemberDate','SeptemberController@get_data_byDate');
Route::get('septemberDateRange','SeptemberController@get_data_rangeDate');
Route::get('september_show/{id}','SeptemberController@show');

//Faskes Get Data 
Route::get('faskesTabelAllData','faskesController@get_all_data');
Route::get('faskesTabel/{id}','faskesController@show');

//Insert Data 
Route::post('barang/tambah_barang','apicontroller@insert_data_barang');
Route::post('demografi/input','demograficontroller@insert_demografi');
Route::post('septemberTabel/input','SeptemberController@insert_september');
Route::post('faskesTabel/input','faskesController@insert_faskes');

//Update Data 
Route::put('barang/update/{kode_barang}','apicontroller@update_data_barang');
Route::put('demografi/update/{id}','demograficontroller@update');
Route::put('septemberTabel/update/{id}','SeptemberController@update_data');
Route::put('faskesTabel/update/{id}','faskesController@update_data');

//Delete Data
Route::delete('barang/delete/{kode_barang}','apicontroller@delete_data_barang');
Route::delete('demografi/delete/{id}','demograficontroller@delete_data');
Route::delete('septemberTabel/delete/{id}','SeptemberController@delete_data');
Route::delete('faskesTabel/delete/{id}','faskesController@delete_data');

