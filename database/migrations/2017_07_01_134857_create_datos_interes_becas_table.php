<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosInteresBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_interes_becas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alquilaSolo')->nullable();
            $table->text('observacionesResidencia')->nullable();
            $table->text('observaciones')->nullable();
            $table->integer('mismaResidencia')->nullable();
            $table->text('detallesMismaResidencia')->nullable();
            $table->text('direccionNuevaResidencia')->nullable();
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
        Schema::dropIfExists('datos_interes_becas');
    }
}
