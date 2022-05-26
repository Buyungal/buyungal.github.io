<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPuskesmasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_puskesmas', function (Blueprint $table) {
            $table->id('id');
            $table->string('Desa');
            $table->string('PuskesmasRawatInap');
            $table->string('PuskesmasTanpaRawatInap');
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
        Schema::drop('data_puskesmas');
    }
}
