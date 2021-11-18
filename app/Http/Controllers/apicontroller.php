<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangModel;

class apicontroller extends Controller
{
    public function get_all_barang(){
        return response()->json(BarangModel::all(),200);
    }

    public function insert_data_barang(Request $request){
        $insert_barang = new BarangModel;
        $insert_barang->nama_barang = $request->namaBarang;
        $insert_barang->jumlah_barang = $request->jmlBarang;
        $insert_barang->save();
        return response([
            'status' => 'OK',
            'message' => 'Barang akan disimpan',
            'data' => $insert_barang
        ],200); 
    }

    public function update_data_barang(Request $request,$id){
        $check_barang = BarangModel::firstWhere('kode_barang', $id);
        if ($check_barang){
            $data_barang = BarangModel::find($id);
            $data_barang -> nama_barang = $request->namaBarang;
            $data_barang -> jumlah_barang = $request->jmlBarang;
            $data_barang -> save();
            return response([
                'status' => 'OK',
                'message'=> 'Data Berhasil diubah',
                'update-data' => $data_barang
            ],200);
        }

        else{
            return response([
                'status' => 'Not Found',
                'message'=> 'Kode barang tidak ada '
            ],404);
        }
    }

    public function delete_data_barang($id){
        $check_barang = BarangModel::firstWhere('kode_barang', $id);
        if($check_barang){
            BarangModel::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Data Dihapus',
            ],200);
        }

        else{
            return response([
                'status' => 'Not Found',
                'message' => 'Kode Barang tidak ditemukan'
            ],404);
        }
    }
    
}
