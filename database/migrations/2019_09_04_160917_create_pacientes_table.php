<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->unsignedBigInteger('tipoDocumento');
            $table->foreign('tipoDocumento')->references('id')->on('documentos')->onDelete('cascade');
            $table->string('numeroDocumento');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('visita');
            $table->string('sexo_paciente');
            $table->string('estado_civil');
            $table->string('fecha_nacimiento');
            $table->string('nivel_escolaridad');
            $table->string('poblacion');
            $table->string('year');
            $table->string('linea');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
            $table->unsignedBigInteger('profecional_id');
            $table->foreign('profecional_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pacientes');
    }
}
