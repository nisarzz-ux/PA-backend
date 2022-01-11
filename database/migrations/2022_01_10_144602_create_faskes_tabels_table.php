<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaskesTabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faskes_tabels', function (Blueprint $table) {
            $table->bigIncrements('id_faskes');
            $table->string('kecamatan');
            $table->string('bagian_wilayah');
            $table->string('jenis_faskes');
            $table->string('alamat');
            $table->string('status');
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
        Schema::dropIfExists('faskes_tabels');
    }
}