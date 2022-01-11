<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovemberTabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('november_tabels', function (Blueprint $table) {
            $table->bigIncrements('id_tableNov');
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
        Schema::dropIfExists('november_tabels');
    }
}
