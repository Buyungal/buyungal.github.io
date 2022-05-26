<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTempatIbadahsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tempat_ibadahs', function (Blueprint $table) {
            $table->id('id');
            $table->string('Desa');
            $table->string('JumlahMasjid');
            $table->string('JumlahMushola');
            $table->string('JumlahGerejaProtestan');
            $table->string('JumlahGerejaKatholik');
            $table->string('JumlahPura');
            $table->string('JumlahVihara');
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
        Schema::drop('data_tempat_ibadahs');
    }
}
