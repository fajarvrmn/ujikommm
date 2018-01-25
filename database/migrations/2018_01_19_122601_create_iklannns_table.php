<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIklannnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iklannns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kondisi');
            $table->string('transmisi');
            $table->string('bahanbakar');
            $table->integer('tahunkeluar');
            $table->string('warna');
            $table->string('deskripsi');
            $table->string('harga');

             $table->integer('merekkks_id')->unsigned();
            $table->integer('tipeees_id')->unsigned();
            $table->integer('pemasangggs_id')->unsigned();
              $table->integer('wilayahhhs_id')->unsigned();
        
        $table->foreign('wilayahhhs_id')->references('id')->on('wilayahhhs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('merekkks_id')->references('id')->on('merekkks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tipeees_id')->references('id')->on('tipeees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pemasangggs_id')->references('id')->on('pemasangggs')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('iklannns');
    }
}
