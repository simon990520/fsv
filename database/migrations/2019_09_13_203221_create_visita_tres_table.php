<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitaTresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visita_tres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrePaciente')->nullable();
            $table->string('tipoDocumento')->nullable();
            $table->string('numeroIdentidad')->nullable();
            $table->string('nombreCuidador')->nullable();
            $table->string('direccion')->nullable();
            $table->string('recibeBeneficios')->nullable();
            $table->string('recibeBeneficiosPorque')->nullable();
            $table->string('conductaSEguir')->nullable();
            $table->string('charlaFamiliarProblemas')->nullable();
            $table->string('ayudaSobreProblemasFamiliares')->nullable();
            $table->string('familiaAlertaSuicidio')->nullable();
            $table->string('comidaFrutas')->nullable();
            $table->string('prevencionConsumoDrogas')->nullable();
            $table->string('ejerciciosSemanales')->nullable();
            $table->string('descansoEnOchohoras')->nullable();
            $table->string('familiaControlaEmociones')->nullable();
            $table->string('problemasObjetividad')->nullable();
            $table->string('prevencionDeViolencia')->nullable();
            $table->string('acuerdosPorVotacion')->nullable();
            $table->string('aceptacionDeIdeas')->nullable();
            $table->string('demostracionesAfectoFamiliar')->nullable();
            $table->string('celebracionDeTriunfos')->nullable();
            $table->string('visionPositiva')->nullable();
            $table->string('actividadesCultura')->nullable();
            $table->string('actividadesComunitarias')->nullable();
            $table->string('saludoCordial')->nullable();
            $table->string('prestacionDeApoyo')->nullable();
            $table->string('buenTratoPacientes')->nullable();
            $table->unsignedBigInteger('paciente_id');
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
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
        Schema::dropIfExists('visita_tres');
    }
}
