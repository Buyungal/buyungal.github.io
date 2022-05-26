<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataLuasPanenTomatsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_luas_panen_tomats', function (Blueprint $table) {
            $table->id('id');
            $table->enum('JenisTanaman', ['Tomat']);
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
        Schema::drop('data_luas_panen_tomats');
    }
}
