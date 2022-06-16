<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeptemberTabel;
use Carbon\Carbon;

class SeptemberController extends Controller
{
    public function get_all_data()
    {
        return response()->json(SeptemberTabel::with('demografi')->get(),200);
    }

  
    public function insert_september(Request $request)
    {   
        $insert_table = new SeptemberTabel;
        $insert_table -> demografi_id = $request->demografi_id;
        $insert_table -> positif = $request->positif;
        $insert_table -> sembuh = $request->sembuh;
        $insert_table -> mati = $request->mati;
        $insert_table -> rawat = $request->rawat;
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

  
    public function show($id)
    {
        $data = SeptemberTabel::where('id_tableSep','=',$id)->get();
        return response()->json($data,200);
    }

    
    public function update_data(Request $request, $id)
    {
        $data = SeptemberTabel::firstWhere('id_tableSep',$id);
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

  
    public function delete_data($id)
    {
        $data = SeptemberTabel::where('id_tableSep', $id);
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
