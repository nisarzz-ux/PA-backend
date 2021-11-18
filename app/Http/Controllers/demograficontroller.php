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

    public function insert_demografi(Request $request){
        $insert_demografi = new DemografiModel;
        $insert_demografi-> kecamatan = $request-> kecamatan ;
        $insert_demografi-> bagian_wilayah = $request -> bgnWilayah;
        $insert_demografi-> penduduk_laki = $request -> pendudukLaki;
        $insert_demografi-> penduduk_wanita = $request -> pendudukWanita;
        $insert_demografi->save();
        return response([
            'status' => 'OK',
            'message' => 'Data berhasil Disimpan',
            'data' => $insert_demografi
        ],200);
    }

    public function update(Request $request, $id){
        $demografi = DemografiModel::findOrFail($id);
        $demografi -> update($request->all());
        
        return $demografi;
    }

}
