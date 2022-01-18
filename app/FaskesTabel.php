<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaskesTabel extends Model
{
    protected $table ='faskes_tabels';
    protected $fillable = ['nama_faskes','bagian_wilayah','jenis_faskes','alamat','status','latKoordinat','longKoordinat'];
    protected $primaryKey = 'id_faskes';
    
    
}
