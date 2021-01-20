<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasFrecuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_frecuentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pregunta')->unique();
            $table->string('respuesta', 500);
            $table->unsignedInteger('id_departamento');
            $table->foreign('id_departamento')->references('id')->on('departamento')->onDelete('cascade');
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
        Schema::dropIfExists('preguntas_frecuentes');
    }
}
