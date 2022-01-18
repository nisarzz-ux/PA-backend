<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class NovemberTabel extends Model
{
    protected $table ='november_tabels';
    protected $fillable = ['kecamatan','bagian_wilayah','positif','sembuh','mati','rawat','Tanggal'];
    protected $primaryKey = 'id_tableNov';
    // protected $hidden =['id_tableSep'];

    function getTanggal(){
        return Carbon::parse($this->attributes["Tanggal"])
            ->format("dd-mm-YYYY");
    }
}
