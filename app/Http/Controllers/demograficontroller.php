<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DemografiModel;


class demograficontroller extends Controller
{
    // read data 
    public function get_all_demografi(){
        return response()->json(DemografiModel::all(),200);
    }

    public Function edit($id){
        $data = DemografiModel::where('id_wilayah','=',$id)->get();
        return response()->json($data,200);
    }

    public function insert_demografi(Request $request){
        $insert_demografi = new DemografiModel;
        $insert_demografi-> kecamatan = $request-> kecamatan ;
        $insert_demografi-> bagian_wilayah = $request -> bgnWilayah;
        $insert_demografi-> penduduk_laki = $request -> pendudukLaki;
        $insert_demografi-> penduduk_wanita = $request -> pendudukWanita;
        $insert_demografi-> latKoordinat = $request -> latKoordinat;
        $insert_demografi-> longKoordinat = $request -> longKoordinat;
        $insert_demografi->save();
        return response([
            'status' => 'OK',
            'message' => 'Data berhasil Disimpan',
            'data' => $insert_demografi
        ],200);
    }

    public function update(Request $request, $id){
        
        $demografi = DemografiModel::firstWhere('id_wilayah', $id);
        $demografi-> kecamatan = $request -> kecamatan ;
        $demografi-> bagian_wilayah = $request -> bagian_wilayah;
        $demografi-> penduduk_laki = $request -> penduduk_laki;
        $demografi-> penduduk_wanita = $request -> penduduk_wanita;
        $demografi-> latKoordinat = $request -> latKoordinat;
        $demografi-> longKoordinat = $request -> longKoordinat;
        $demografi -> save();
        return response([
            'status' => 'OK',
            'message' => 'Data berhasil Disimpan',
            'data' => $demografi
        ],200);
    }

    public function delete_data($id){
        $demografi = DemografiModel::where('id_wilayah', $id);
        if($demografi){
            $demografi->delete();
            return response([
                'status' => 'OK',
                'message' => 'Data Dihapus',
            ],200);
        }

        else{
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan'
            ],404);
        }
    }

}
