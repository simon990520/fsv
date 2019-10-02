<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanalizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canalizacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salud')->nullable();
            $table->string('educacion')->nullable();
            $table->string('subsistencia')->nullable();
            $table->string('social')->nullable();
            $table->string('fortalecimiento')->nullable();
            $table->string('ese')->nullable();
            $table->string('eapb')->nullable();
            $table->string('secretariaSalud')->nullable();
            $table->string('sac')->nullable();
            $table->string('siau')->nullable();
            $table->string('ips')->nullable();
            $table->string('saludOtro')->nullable();
            $table->string('policia')->nullable();
            $table->string('cti')->nullable();
            $table->string('secretariaGobierno')->nullable();
            $table->string('registraduria')->nullable();
            $table->string('fiscalia')->nullable();
            $table->string('inspeccionPolicia')->nullable();
            $table->string('justiciaOtro')->nullable();
            $table->string('icbf')->nullable();
            $table->string('defensoriaPueblo')->nullable();
            $table->string('personeria')->nullable();
            $table->string('comisariaFamilia')->nullable();
            $table->string('proteccionOtro')->nullable();
            $table->string('institucionEducativa')->nullable();
            $table->string('sena')->nullable();
            $table->string('universidad')->nullable();
            $table->string('alfabetizacion')->nullable();
            $table->string('educacionOtro')->nullable();
            $table->string('proyectosProductivos')->nullable();
            $table->string('economiaOtro')->nullable();
            $table->string('unidadVictimas')->nullable();
            $table->string('familiasAccion')->nullable();
            $table->string('jovenesAccion')->nullable();
            $table->string('programaAdultoMayor')->nullable();
            $table->string('inclucionOtro')->nullable();
            $table->string('gruposApoyo')->nullable();
            $table->string('organizacionConDiscapacidad')->nullable();
            $table->string('casaCultura')->nullable();
            $table->string('deportesRecreacion')->nullable();
            $table->string('redUnidos')->nullable();
            $table->string('socialOtro')->nullable();
            $table->string('programa')->nullable();
            $table->string('porquePrograma')->nullable();
            $table->string('estrategia')->nullable();
            $table->string('porqueEstrategia')->nullable();
            $table->string('proyecto')->nullable();
            $table->string('porqueProyecto')->nullable();
            $table->string('servicio')->nullable();
            $table->string('porqueServicio')->nullable();
            $table->string('nombrePaciente')->nullable();
            $table->string('tipoDocumento')->nullable();
            $table->string('numeroIdentidad')->nullable();
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
        Schema::dropIfExists('canalizacions');
    }
}
