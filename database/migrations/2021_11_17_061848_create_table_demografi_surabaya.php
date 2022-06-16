<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDemografiSurabaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_demografi_surabayas', function (Blueprint $table) {
            $table->bigIncrements('id_wilayah');
            $table ->string('kecamatan');
            $table->string('bagian_wilayah');
            $table->integer('penduduk_laki');
            $table->integer('penduduk_wanita');
            $table->float('latKoordinat');
            $table->float('longKoordinat');
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
        Schema::dropIfExists('table_demografi_surabayas');
    }
}
