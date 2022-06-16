<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelCovidSeptembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_covid_septembers', function (Blueprint $table) {
            $table->bigIncrements('id_tableSep');
            $table->integer('demografi_id');
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
        //
    }
}
