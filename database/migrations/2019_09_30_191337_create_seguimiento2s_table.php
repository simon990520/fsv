<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimiento2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('aseguramiento');
            $table->unsignedBigInteger('eps');
            $table->foreign('eps')->references('id')->on('eps')->onDelete('cascade');
            $table->string('requerimientoCanalizacion');
            $table->string('tipoDeServicio');
            $table->string('charlaFamiliarProblemas');
            $table->string('ayudaSobreProblemasFamiliares');
            $table->string('familiaAlertaSuicidio');
            $table->string('comidaFrutas');
            $table->string('prevencionConsumoDrogas');
            $table->string('ejerciciosSemanales');
            $table->string('descansoEnOchohoras');
            $table->string('familiaControlaEmociones');
            $table->string('problemasObjetividad');
            $table->string('prevencionDeViolencia');
            $table->string('acuerdosPorVotacion');
            $table->string('aceptacionDeIdeas');
            $table->string('demostracionesAfectoFamiliar');
            $table->string('celebracionDeTriunfos');
            $table->string('visionPositiva');
            $table->string('actividadesCultura');
            $table->string('actividadesComunitarias');
            $table->string('saludoCordial');
            $table->string('prestacionDeApoyo');
            $table->string('buenTratoPacientes');
            $table->string('protegeTuVida');
            $table->string('habitos');
            $table->string('comnicacionAsertiva');
            $table->string('manejoConflictos');
            $table->string('buenAutoestima');
            $table->string('tiempoLibre');
            $table->string('buenTrato');
            $table->string('autoObservacion');
            $table->string('personasConfianza');
            $table->string('medicacionCorrecta');
            $table->string('medicoSintomas');
            $table->string('noConsumirToxicos');
            $table->string('asistenciaControlesMedicos');
            $table->string('trastornoBipolar');
            $table->string('epilepsia');
            $table->string('esquizofrenia');
            $table->string('psicosis');
            $table->string('depresion');
            $table->string('suicidio');
            $table->string('segundaVisita');
            $table->unsignedBigInteger('seguimientos_id');
            $table->foreign('seguimientos_id')->references('id')->on('seguimientos')->onDelete('cascade');
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
        Schema::dropIfExists('seguimiento2s');
    }
}
