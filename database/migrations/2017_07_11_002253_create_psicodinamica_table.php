<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsicodinamicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psicodinamica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('problemasFamiliares');
            $table->string('problemasProfesores');
            $table->string('problemasEstudiantes');
            $table->string('problemasDuenoResidencia');
            $table->string('desintegracionFamiliar');
            $table->string('desorganizacionFamiliar');
            $table->string('madreSoltera');
            $table->string('cuidadoHijos');
            $table->text('obsproblemasFamiliares')->nullable();
            $table->text('obsproblemasProfesores')->nullable();
            $table->text('obsproblemasEstudiantes')->nullable();
            $table->text('obsproblemasDuenoResidencia')->nullable();
            $table->text('obsdesintegracionFamiliar')->nullable();
            $table->text('obsdesorganizacionFamiliar')->nullable();
            $table->text('obsmadreSoltera')->nullable();
            $table->text('obscuidadoHijos')->nullable();
            $table->string('comportamiento');
            $table->text('observacionesGenerales')->nullable();
            $table->integer('estudiante')->unsigned();
            $table->integer('peticion')->unsigned();
            $table->foreign('estudiante')->references('id')->on('datos_personales')->onDelete('cascade');
            $table->foreign('peticion')->references('id')->on('peticiones')->onDelete('cascade');
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
        Schema::dropIfExists('psicodinamica');
    }
}
