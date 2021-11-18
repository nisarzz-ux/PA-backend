<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'stuff';
    // Memberitahu kalau table yang digunakan adalah table stuff
    protected $primaryKey = 'kode_barang';
    //memberitahu kalau Primary key adalah kode_barang
}
