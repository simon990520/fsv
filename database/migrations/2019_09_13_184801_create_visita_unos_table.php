<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitaUnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visita_unos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrePaciente')->nullable();
            $table->string('tipoDocumento')->nullable();
            $table->string('numeroIdentidad')->nullable();
            $table->string('nombreCuidador')->nullable();
            $table->string('direccion')->nullable();
            $table->string('desarrolloCanalizadoA')->nullable();
            $table->string('primeraFecha')->nullable();
            $table->string('segundaFecha')->nullable();
            $table->string('terceraFecha')->nullable();
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('planConcertado')->nullable();
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
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
        Schema::dropIfExists('visita_unos');
    }
}
