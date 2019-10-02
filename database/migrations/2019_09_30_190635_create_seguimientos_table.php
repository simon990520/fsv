<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreCompleto')->nullable();
            $table->string('tipoDocumento')->nullable();
            $table->string('documento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('nombreCuidador')->nullable();
            $table->string('beneficiarioEnDireccion')->nullable();
            $table->string('institucional')->nullable();
            $table->string('comunitaria')->nullable();
            $table->string('sitioDelBeneficiario')->nullable();
            $table->string('cualBeneficiario')->nullable();
            $table->string('nuevaDireccion')->nullable();
            $table->string('nuevoMunicipio')->nullable();
            $table->string('internadoIps')->nullable();
            $table->string('tiempo')->nullable();
            $table->string('canalizado2018')->nullable();
            $table->string('logrosObtenidos')->nullable();
            $table->string('servicioCanlizado')->nullable();
            $table->string('porqueNoSolicitoServicio')->nullable();
            $table->string('recivioElServicio')->nullable();
            $table->string('razonNoServicio')->nullable();
            $table->string('barreraEncontrada')->nullable();
            $table->string('cualFueLaBarrera')->nullable();
            $table->string('porqueNoRecibioServicio')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('estadoActualEnfermedad')->nullable();
            $table->string('historiaClinica')->nullable();
            $table->string('tomaMedicamentos')->nullable();
            $table->string('cualMedicamentos')->nullable();
            $table->string('horariosTomaMedicamentos')->nullable();
            $table->string('actividadesParalelas')->nullable();
            $table->string('cualActividades')->nullable();
            $table->string('deberiaCapacitarse')->nullable();
            $table->string('enQueCapacitar')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('hijos')->nullable();
            $table->string('cantidadHijos')->nullable();
            $table->string('dependienteIndependiente')->nullable();
            $table->string('numeroPersonasEncargadas')->nullable();
            $table->string('parentescoPersonasEncargadas')->nullable();
            $table->string('deporte')->nullable();
            $table->string('tipoDeporte')->nullable();
            $table->string('reunionesFamiliares')->nullable();
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
        Schema::dropIfExists('seguimientos');
    }
}
