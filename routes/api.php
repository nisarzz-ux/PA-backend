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

Route::get('barang','apicontroller@get_all_barang');

//Demografi Get Data
Route::get('demografi','demograficontroller@get_all_demografi');
Route::get('demografi_show/{id}','demograficontroller@edit');

//September Get Data 
Route::get('septemberTabel','SeptemberController@get_all_data');
Route::get('september_show/{id}','SeptemberController@show');

//Oktober Get Data 
Route::get('oktoberTabel','OktoberController@get_all_data');
Route::get('oktoberTabel/{id}','OktoberController@show');

//November Get Data 
Route::get('novemberTabel','NovemberController@get_all_data');
Route::get('novemberTabel/{id}','NovemberController@show');

//Desember Get Data 
Route::get('desemberTabel','desemberController@get_all_data');
Route::get('desemberTabel/{id}','desemberController@show');

//Januari Get Data 
Route::get('januariTabel','januariController@get_all_data');
Route::get('januariTabel/{id}','januariController@show');

//Faskes Get Data 
Route::get('faskesTabel','faskesController@get_all_data');
Route::get('faskesTabel/{id}','faskesController@show');


//Insert Data 
Route::post('barang/tambah_barang','apicontroller@insert_data_barang');
Route::post('demografi/input','demograficontroller@insert_demografi');
Route::post('septemberTabel/input','SeptemberController@insert_september');
Route::post('oktoberTabel/input','OktoberController@insert_oktober');
Route::post('novemberTabel/input','NovemberController@insert_november');
Route::post('desemberTabel/input','desemberController@insert_desember');
Route::post('januariTabel/input','januariController@insert_desember');
Route::post('faskesTabel/input','faskesController@insert_faskes');


//Update Data 
Route::put('barang/update/{kode_barang}','apicontroller@update_data_barang');
Route::put('demografi/update/{id}','demograficontroller@update');
Route::put('septemberTabel/update/{id}','SeptemberController@update_data');
Route::put('oktoberTabel/update/{id}','OktoberController@update_data');
Route::put('novemberTabel/update/{id}','NovemberController@update_data');
Route::put('desemberTabel/update/{id}','desemberController@update_data');
Route::put('januariTabel/update/{id}','januariController@update_data');
Route::put('faskesTabel/update/{id}','faskesController@update_data');


//Delete Data
Route::delete('barang/delete/{kode_barang}','apicontroller@delete_data_barang');
Route::delete('demografi/delete/{id}','demograficontroller@delete_data');
Route::delete('septemberTabel/delete/{id}','SeptemberController@delete_data');
Route::delete('oktoberTabel/delete/{id}','OktoberController@delete_data');
Route::delete('novemberTabel/delete/{id}','NovemberController@delete_data');
Route::delete('desemberTabel/delete/{id}','desemberController@delete_data');
Route::delete('januariTabel/delete/{id}','januariController@delete_data');
Route::delete('faskesTabel/delete/{id}','faskesController@delete_data');
