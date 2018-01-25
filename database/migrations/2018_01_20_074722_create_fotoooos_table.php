<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoooosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotoooos', function (Blueprint $table) {
           $table->increments('id');
            $table->string('depan');
            $table->string('belakang');
            $table->string('kiri');
            $table->string('kanan');
            $table->string('lainnya1');
            $table->string('lainnya2');
            $table->string('lainnya3');
            $table->string('lainnya4');
            $table->string('lainnya5');
            $table->integer('iklannns_id')->unsigned();
            $table->timestamps();

            $table->foreign('iklannns_id')->references('id')->on('iklannns')->onUpdate('cascade')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotoooos');
    }
}
