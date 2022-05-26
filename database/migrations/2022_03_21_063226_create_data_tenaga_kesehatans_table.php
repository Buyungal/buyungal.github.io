<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTenagaKesehatansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tenaga_kesehatans', function (Blueprint $table) {
            $table->id('id');
            $table->string('JumlahDokter');
            $table->string('JumlahPerawat');
            $table->string('JumlahBidan');
            $table->string('JumlahFarmasi');
            $table->string('JumlahAhliGizi');
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
        Schema::drop('data_tenaga_kesehatans');
    }
}
