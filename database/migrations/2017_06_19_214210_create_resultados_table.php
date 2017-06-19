<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_alumno')->unsigned()->nullable();
            $table->foreign('id_alumno')->references('id')->on('alumnos')->onDelete('cascade');

            $table->integer('id_subarea')->unsigned()->nullable();
            $table->foreign('id_subarea')->references('id')->on('subareas')->onDelete('cascade');

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
        Schema::dropIfExists('resultados');
    }
}
