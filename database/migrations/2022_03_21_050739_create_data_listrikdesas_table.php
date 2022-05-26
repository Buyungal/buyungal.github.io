<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataListrikdesasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_listrikdesas', function (Blueprint $table) {
            $table->id('id');
            $table->string('Desa');
            $table->string('PenggunaListrikPln');
            $table->string('PenggunaNonListrikPln');
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
        Schema::drop('data_listrikdesas');
    }
}
