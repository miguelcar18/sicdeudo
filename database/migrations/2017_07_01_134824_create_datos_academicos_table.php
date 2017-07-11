<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('especialidad');
            $table->string('escuela');
            $table->string('anioIngresoUdo');
            $table->string('anioIngresoPrograma');
            $table->string('semestreActual');
            $table->integer('creditosSemestreAnterior')->nullable();
            $table->integer('creditosAprobadosCarrera')->nullable();
            $table->double('promedioSemestreAnterior');
            $table->integer('numeroMateriasInscritas')->nullable();
            $table->integer('numeroCreditosInscritos')->nullable();
            $table->integer('materiasInscritasSemestreAnterior')->nullable();
            $table->integer('materiasCursadasSemestreAnterior')->nullable();
            $table->integer('materiasAprobadasSemestreAnterior')->nullable();
            $table->integer('materiasRetiradasSemestreAnterior')->nullable();
            $table->integer('estudiante')->unsigned();
            $table->foreign('estudiante')->references('id')->on('datos_personales')->onDelete('cascade');
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
        Schema::dropIfExists('datos_academicos');
    }
}
