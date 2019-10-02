<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrePaciente')->nullable();
            $table->string('nombreCuidador')->nullable();
            $table->string('direccion')->nullable();
            $table->string('cumplimientoExpectativas')->nullable();
            $table->string('canalizacionRealizada')->nullable();
            $table->string('sintioApoyo')->nullable();
            $table->string('presentacionPersonal')->nullable();
            $table->string('puntualidad')->nullable();
            $table->string('informacionSuministrada')->nullable();
            $table->string('emparia')->nullable();
            $table->string('conceptosContenidos')->nullable();
            $table->string('comprension')->nullable();
            $table->string('calidadMaterial')->nullable();
            $table->string('islustraciones')->nullable();
            $table->string('impactoEstrategia')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('encuestas');
    }
}
