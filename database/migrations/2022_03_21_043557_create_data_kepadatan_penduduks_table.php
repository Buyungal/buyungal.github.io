<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKepadatanPenduduksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kepadatan_penduduks', function (Blueprint $table) {
            $table->id('id');
            $table->string('Desa');
            $table->string('Penduduk');
            $table->string('LuasWilayah');
            $table->string('KepadatanPenduduk');
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
        Schema::drop('data_kepadatan_penduduks');
    }
}
