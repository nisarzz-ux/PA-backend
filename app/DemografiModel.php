<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemografiModel extends Model
{
    protected $table = 'table_demografi_surabayas';
    protected $fillable = ['kecamatan','bagian_wilayah','penduduk_laki','penduduk_wanita'];
    // protected $primary_key = 'id_wilayah';
}
