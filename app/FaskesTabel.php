<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaskesTabel extends Model
{
    protected $table ='faskes_tabels';
    protected $fillable = ['demografi_id','nama_faskes','jenis_faskes','alamat','status','latKoordinat','longKoordinat'];
    protected $primaryKey = 'id_faskes';
    
    public function demografi(){
        return $this->belongsTo('App\FaskesTabel','demografi_id','id_faskes');
    }
    
}
