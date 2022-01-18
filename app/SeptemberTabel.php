<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class SeptemberTabel extends Model
{
    protected $table = 'table_covid_septembers';
    protected $fillable = ['kecamatan','bagian_wilayah','positif','sembuh','mati','rawat','Tanggal'];
    protected $primaryKey = 'id_tableSep';
    // protected $hidden =['id_tableSep'];

    function getTanggal(){
        return Carbon::parse($this->attributes["Tanggal"])
            ->format("dd-mm-YYYY");
    }
}
