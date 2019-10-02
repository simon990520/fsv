<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verificacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreCompleto');
            $table->string('tipoDocumento');
            $table->string('Documento');
            $table->string('nombreCuidador');
            $table->string('educacion');
            $table->string('sustento');
            $table->string('social');
            $table->string('empoderamiento');
            $table->string('Salud');
            $table->string('servicioCanalizado');
            $table->string('solicitoElServicio');
            $table->string('definioFechaAcercamiento');
            $table->string('cualFecha');
            $table->string('preguntaA');
            $table->string('preguntaB');
            $table->string('preguntaC');
            $table->string('preguntaD');
            $table->string('preguntaE');
            $table->string('preguntaF');
            $table->string('preguntaG');
            $table->string('preguntaGCuales');
            $table->string('respuestaA');
            $table->string('sustentacionRespuestaA');
            $table->string('respuestaB');
            $table->string('sustentacionRespuestaB');
            $table->string('respuestaC');
            $table->string('sustentacionRespuestaC');
            $table->string('respuestaD');
            $table->string('sustentacionRespuestaD');
            $table->string('respuestaE');
            $table->string('sustentacionRespuestaE');
            $table->string('respuestaF');
            $table->string('sustentacionRespuestaF');
            $table->string('sustentacionRespuestaG');
            $table->string('educacion2');
            $table->string('sustento2');
            $table->string('social2');
            $table->string('empoderamiento2');
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
        Schema::dropIfExists('verificacions');
    }
}
