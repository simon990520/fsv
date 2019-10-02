<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemaforosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semaforos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_visitas');
            $table->string('numero_dias');
            $table->string('visitas');
            $table->string('dias');
            $table->string('visitasrealizadas');
            $table->string('fecha')->nullable();
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
        Schema::dropIfExists('semaforos');
    }
}
