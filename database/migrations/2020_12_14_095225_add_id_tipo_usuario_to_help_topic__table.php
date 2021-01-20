<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdTipoUsuarioToHelpTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('help_topic', function (Blueprint $table) {
            
            $table->unsignedInteger('id_tipo_usuario')->after('help_topic');
            $table->foreign('id_tipo_usuario')->references('id')->on('tipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('help_topic', function (Blueprint $table) {
            //
        });
    }
}
