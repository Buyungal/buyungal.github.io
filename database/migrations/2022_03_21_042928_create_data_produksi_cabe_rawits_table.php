<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataProduksiCabeRawitsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_produksi_cabe_rawits', function (Blueprint $table) {
            $table->id('id');
            $table->string('JenisTanaman');
            $table->string('Tahun2017');
            $table->string('Tahun2018');
            $table->string('Tahun2019');
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
        Schema::drop('data_produksi_cabe_rawits');
    }
}
