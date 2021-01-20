<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_topic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('help_topic')->unique();
            $table->timestamps();
            // $table->unsignedInteger('id_departamento');
            // $table->foreign('id_departamento')->references('id')->on('departamento');
            // $table->unsignedInteger('id_tipo_usuario');
            // $table->foreign('id_tipo_usuario')->references('id')->on('tipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('help_topic');
    }
}
