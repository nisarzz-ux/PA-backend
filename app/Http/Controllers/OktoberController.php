<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OktoberTable;
use Carbon\Carbon;

class OktoberController extends Controller
{
    
    //get all Data 
    public function get_all_data(){
        return response() ->json(OktoberTable::all(),200);
    }

    //get Data By Id 
    public function show($id)
    {
        $data = OktoberTable::where('id_tableOkt','=',$id)->get();
        return response()->json($data,200);
    }
    
    //insert data
    public function insert_oktober(Request $request)
    {   
        $insert_table = new OktoberTable;
        $insert_table -> kecamatan = $request -> kecamatan;
        $insert_table -> bagian_wilayah = $request -> bagian_wilayah;
        $insert_table -> positif = $request -> positif;
        $insert_table -> sembuh = $request -> sembuh;
        $insert_table -> mati = $request -> mati;
        $insert_table -> rawat = $request -> rawat;
        $tanggal = Carbon::parse($request->Tanggal);
        $insert_table -> Tanggal = $tanggal ;
        $insert_table -> save();
        $insert_table -> Tanggal = $tanggal->format("d-m-Y") ;
        return response([
            'status' => 'OK',
            'message' => 'Data berhasil Disimpan',
            'data' => $insert_table
        ],200);
    }

    //Update Data 
    public function update_data(Request $request, $id)
    {
        $data = OktoberTable::firstWhere('id_tableOkt',$id);
        $data -> kecamatan = $request -> kecamatan;
        $data -> bagian_wilayah = $request -> bagian_wilayah;
        $data -> positif = $request -> positif;
        $data -> sembuh = $request -> sembuh;
        $data -> mati = $request -> mati;
        $data-> rawat = $request -> rawat;
        $tanggal = Carbon::parse($request->Tanggal);
        $data -> Tanggal = $tanggal ;
        $data -> save();
        $data -> Tanggal = $tanggal->format("d-m-Y") ;
        return response([
            'status' => 'OK',
            'message' => 'Data berhasil Disimpan',
            'data' => $data
        ],200);
    }

    //delete Data
    public function delete_data($id)
    {
        $data = OktoberTable::where('id_tableOkt', $id);
        if($data){
            $data->delete();
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
