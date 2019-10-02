<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracterizacionDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracterizacion_dos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hijo')->nullable();
            $table->string('madre')->nullable();
            $table->string('psicologia')->nullable();
            $table->string('medicina')->nullable();
            $table->string('tratamientoPsiquiatra')->nullable();
            $table->string('terapiaOcipacional')->nullable();
            $table->string('nutricion')->nullable();
            $table->string('otraEspecialidadTratamientoTerapeutico')->nullable();
            $table->string('nombreTratamientoFarmacologico')->nullable();
            $table->string('medicinaGeneral')->nullable();
            $table->string('psiquiatra')->nullable();
            $table->string('enfermeria')->nullable();
            $table->string('aseguramiento')->nullable();
            $table->unsignedBigInteger('entidadAseguradora');
            $table->foreign('entidadAseguradora')->references('id')->on('eps')->onDelete('cascade');
            $table->string('nombreIPS')->nullable();
            $table->string('nombreCuidador')->nullable();
            $table->string('telefonoCuidador')->nullable();
            $table->string('edadCuidador')->nullable();
            $table->string('generoCuidador')->nullable();
            $table->string('estadoCivilCuidador')->nullable();
            $table->string('cantidadPersonasACargo')->nullable();
            $table->string('parentescoCuidador')->nullable();
            $table->string('ocupacionCuidador')->nullable();
            $table->string('escolaridadCuidador')->nullable();
            $table->string('entidadAseguradoraCuidador')->nullable();
            $table->string('problemasFrecuentes')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('requerimientoCanalizacion')->nullable();
            $table->string('tipoDeServicio')->nullable();
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->unsignedBigInteger('caracterizacion_id');
            $table->foreign('caracterizacion_id')->references('id')->on('caracterizacions')->onDelete('cascade');
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
        Schema::dropIfExists('caracterizacion_dos');
    }
}
