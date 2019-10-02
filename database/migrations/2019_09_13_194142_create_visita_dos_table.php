<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitaDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visita_dos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrePaciente')->nullable();
            $table->string('tipoDocumento')->nullable();
            $table->string('numeroIdentidad')->nullable();
            $table->string('nombreCuidador')->nullable();
            $table->string('direccion')->nullable();
            $table->string('asistenciaServiciosCanalizados')->nullable();
            $table->string('asistenciaServiciosPorque')->nullable();
            $table->string('barrerasServicio')->nullable();
            $table->string('barreraServicioPorque')->nullable();
            $table->string('recomendacion')->nullable();
            $table->string('medicamentosPaciente')->nullable();
            $table->string('dificultadesTratamiento')->nullable();
            $table->string('olvidoDeMedicamentos')->nullable();
            $table->string('horasMedicamentosIndicadas')->nullable();
            $table->string('retencionMedicamentosEstable')->nullable();
            $table->string('asistenciaAlProfesionalDeSalud')->nullable();
            $table->string('efectosAdversos')->nullable();
            $table->string('retencionEfectosAdversos')->nullable();
            $table->string('adherencia')->nullable();
            $table->string('autoObservacion')->nullable();
            $table->string('personasConfianza')->nullable();
            $table->string('medicacionCorrecta')->nullable();
            $table->string('medicoSintomas')->nullable();
            $table->string('noConsumirToxicos')->nullable();
            $table->string('asistenciaControlesMedicos')->nullable();
            $table->string('trastornoBipolar')->nullable();
            $table->string('epilepsia')->nullable();
            $table->string('esquizofrenia')->nullable();
            $table->string('psicosis')->nullable();
            $table->string('depresion')->nullable();
            $table->string('suicidio')->nullable();
            $table->string('protejeTuVIda')->nullable();
            $table->string('habitosSaludables')->nullable();
            $table->string('conflictosAdecuados')->nullable();
            $table->string('comunicacionAsertiva')->nullable();
            $table->string('buenaAutoestima')->nullable();
            $table->string('tiempoLibre')->nullable();
            $table->string('buenTrato')->nullable();
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
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
        Schema::dropIfExists('visita_dos');
    }
}
