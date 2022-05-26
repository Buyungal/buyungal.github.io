<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataluaswilayahhsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataluaswilayahhs', function (Blueprint $table) {
            $table->id('id');
            $table->string('Desa');
            $table->string('LuasWilayah');
            $table->string('Persentase');
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
        Schema::drop('dataluaswilayahhs');
    }
}
