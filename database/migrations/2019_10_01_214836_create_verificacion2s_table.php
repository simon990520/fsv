<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificacion2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verificacion2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salud2');
            $table->string('servicioCanalizado2');
            $table->string('solicitoElServicio2');
            $table->string('definioFechaAcercamiento2');
            $table->string('cualFecha2');
            $table->string('preguntaH');
            $table->string('preguntaI');
            $table->string('preguntaJ');
            $table->string('preguntaK');
            $table->string('preguntaL');
            $table->string('preguntaM');
            $table->string('Preguntan');
            $table->string('preguntaNCuales');
            $table->string('respuestaH');
            $table->string('sustentacionRespuestaH');
            $table->string('respuestaI');
            $table->string('sustentacionRespuestaI');
            $table->string('respuestaJ');
            $table->string('sustentacionRespuestaJ');
            $table->string('respuestaK');
            $table->string('sustentacionRespuestaK');
            $table->string('respuestaL');
            $table->string('sustentacionRespuestaL');
            $table->string('respuestaM');
            $table->string('sustentacionRespuestaM');
            $table->string('sustentacionRespuestaN');
            $table->string('Observaciones');
            $table->unsignedBigInteger('verificacion_id');
            $table->foreign('verificacion_id')->references('id')->on('verificacions')->onDelete('cascade');
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
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
        Schema::dropIfExists('verificacion2s');
    }
}
