<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FaskesTabel;

class faskesController extends Controller
{
    //get all Data Faskes 
    public function get_all_data(){
        $data = FaskesTabel::with('demografi')->get();
        return response()->json($data,200);
    }
    //get Data Faskes by Id 
    public function show($id)
    {
        $data = FaskesTabel::with('demografi')->where('id_faskes','=',$id)->get();
        return response()->json($data,200);
    }

    //insert Data Faskes 
    public function insert_faskes(Request $request){
        $data = new FaskesTabel;
        $data -> demografi_id= $request->demografi_id;
        $data -> nama_faskes= $request->nama_faskes;
        $data -> jenis_faskes = $request->jenis_faskes;
        $data -> alamat= $request->alamat;
        $data -> status= $request->status;
        $data -> latKoordinat= $request->latKoordinat;
        $data -> longKoordinat= $request->longKoordinat;
        $data -> save();

        return response([
            'status' => 'OK',
            'message'=> 'Data Berhasil Disimpan',
            'data' => $data
        ],200);

    }

    //Update Data 
    public function update_data(Request $request, $id){
        $data = FaskesTabel::firstWhere('id_faskes',$id);
        $data -> demografi_id = $request -> demografi_id;
        $data -> nama_faskes = $request -> nama_faskes;
        $data -> jenis_faskes =$request -> jenis_faskes;
        $data -> alamat = $request -> alamat;
        $data -> status = $request -> status;
        $data -> latKoordinat = $request -> latKoordinat;
        $data -> longKoordinat = $request -> longKoordinat;
        $data -> save();
        return response([
            'status' => 'OK',
            'message'=> 'Data Berhasil Diupdate',
            'data' => $data
        ],200);
    }

    //Delete Data 
    public function delete_data($id)
    {
        $data = FaskesTabel::where('id_faskes', $id);
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
