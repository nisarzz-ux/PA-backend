<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJanuariTabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('januari_tabels', function (Blueprint $table) {
            $table->bigIncrements('id_tableJan');
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
        Schema::dropIfExists('januari_tabels');
    }
}
