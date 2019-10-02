<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracterizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracterizacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreCompleto')->nullable();
            $table->unsignedBigInteger('tipoDocumento');
            $table->foreign('tipoDocumento')->references('id')->on('documentos')->onDelete('cascade');
            $table->string('documentoIdentidad')->nullable();
            $table->string('direccionResidencia')->nullable();
            $table->string('telefono')->nullable();
            $table->string('fechaNacimiento')->nullable();
            $table->string('genero')->nullable();
            $table->string('areaQueHabita')->nullable();
            $table->string('discapacitado')->nullable();
            $table->string('desplazado')->nullable();
            $table->string('victima')->nullable();
            $table->string('gestante')->nullable();
            $table->string('desmovilizado')->nullable();
            $table->string('poblacionInfantil')->nullable();
            $table->string('carcelario')->nullable();
            $table->string('enfoquepoblacional')->nullable();
            $table->string('escolaridad')->nullable();
            $table->string('considerarCapacitarse')->nullable();
            $table->string('enQueCapacitar')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('ingresosMensuales')->nullable();
            $table->string('cuentaBancaria')->nullable();
            $table->string('recibeAyudaEconomica')->nullable();
            $table->string('programaDeAyudaEconomica')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('hijos')->nullable();
            $table->string('cantidadHijos')->nullable();
            $table->string('dependienteIndependiente')->nullable();
            $table->string('deporte')->nullable();
            $table->string('tipoDeporte')->nullable();
            $table->string('reunionesFamiliares')->nullable();
            $table->string('razonReunion')->nullable();
            $table->string('grupoRelijioso')->nullable();
            $table->string('tipoGrupoRelijioso')->nullable();
            $table->string('voluntariadoOGrupoComunidad')->nullable();
            $table->string('tipoDeGrupoVoluntariado')->nullable();
            $table->string('grupoAutoayuda')->nullable();
            $table->string('tipoDeGrupoAutoayuda')->nullable();
            $table->string('organizacionCondiscapacidad')->nullable();
            $table->string('tipoOrganizacionConDiscapacidad')->nullable();
            $table->string('participacionPolitica')->nullable();
            $table->string('tipoParticipacionPolitica')->nullable();
            $table->string('diagnosticoCIE')->nullable();
            $table->string('estadoDeEnfermedad')->nullable();
           //caracterizacionDos va aqui
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
        Schema::dropIfExists('caracterizacions');
    }
}
