<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class desemberTabel extends Model
{
    protected $table ='desember_tabels';
    protected $fillable = ['kecamatan','bagian_wilayah','positif','sembuh','mati','rawat'];
    protected $primaryKey = 'id_tableDes';
    // protected $hidden =['id_tableSep'];

    function getTanggal(){
        return Carbon::parse($this->attributes["Tanggal"])
            ->format("dd-mm-YYYY");
    }
}
