<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class OktoberTable extends Model
{
    protected $table = 'oktober_tables';
    protected $fillable = ['kecamatan','bagian_wilayah','positif','sembuh','mati','rawat','Tanggal'];
    protected $primaryKey = 'id_tableOkt';
    // protected $hidden =['id_tableSep'];

    function getTanggal(){
        return Carbon::parse($this->attributes["Tanggal"])
            ->format("dd-mm-YYYY");
    }
}
