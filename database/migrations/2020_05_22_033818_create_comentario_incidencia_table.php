<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioIncidenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_incidencia', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_incidencia');
            $table->bigInteger('id_comentario');
            $table->foreign('id_incidencia')->references('id')->on('incidencias');
            $table->foreign('id_comentario')->references('id')->on('comentarios');
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
        Schema::dropIfExists('comentario_incidencia');
    }
}
