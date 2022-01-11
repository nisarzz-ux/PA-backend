<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesemberTabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desember_tabels', function (Blueprint $table) {
            $table->bigIncrements('id_tableDes');
            $table ->string('kecamatan');
            $table->string('bagian_wilayah');
            $table->integer('positif');
            $table->integer('sembuh');
            $table->integer('mati');
            $table->integer('rawat');
            $table->date('Tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desember_tabels');
    }
}
