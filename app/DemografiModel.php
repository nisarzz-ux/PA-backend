<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemografiModel extends Model
{
    protected $table = 'table_demografi_surabayas';
    protected $fillable = ['kecamatan','bagian_wilayah','penduduk_laki','penduduk_wanita','latKoordinat','longKoordinat'];
    protected $primaryKey = 'id_wilayah';

    public function september(){
        return $this->hasMany('App\SeptemberTabel','demografi_id','id_wilayah');
    }

    
    

}

