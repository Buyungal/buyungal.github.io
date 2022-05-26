<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUnggasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_unggas', function (Blueprint $table) {
            $table->id('id');
            $table->string('JenisUnggas');
            $table->string('Tahun2018');
            $table->string('Tahun2019');
            $table->string('Tahun2020');
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
        Schema::drop('data_unggas');
    }
}
