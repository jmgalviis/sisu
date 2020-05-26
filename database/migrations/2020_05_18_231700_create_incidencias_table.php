<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->text('description');
            $table->string('file',200)->nullable();
            $table->bigInteger('id_user');
            $table->bigInteger('id_estado')->default(\App\Estado::NUEVA);
            $table->bigInteger('id_tipo_incidencia');
            $table->bigInteger('id_prioridad');
            $table->bigInteger('id_user_asignado')->nullable();

            //Foranea usuario
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_tipo_incidencia')->references('id')->on('tipo_incidencias');
            $table->foreign('id_prioridad')->references('id')->on('prioridades');
            $table->foreign('id_user_asignado')->references('id')->on('users');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
}
