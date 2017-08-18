<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEconomiaFamiliarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economia_familiar', function (Blueprint $table) {
            $table->increments('id');
            $table->double('sueldo');
            $table->double('ayudaFamiliar');
            $table->double('negocio');
            $table->double('rentas');
            $table->double('becasCreditos');
            $table->double('pensionJubilacion');
            $table->double('alimentacion');
            $table->double('vivienda');
            $table->double('serviciosPublicos');
            $table->double('transporte');
            $table->double('salud');
            $table->double('hijos');
            $table->double('utiles');
            $table->double('capitalMensual');
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('economia_familiar');
    }
}
