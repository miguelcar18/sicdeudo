<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoFamiliarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_familiar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreCarga');
            $table->string('parentesco');
            $table->integer('edad');
            $table->string('oficio');
            $table->string('institucion')->nullable();
            $table->double('sueldoCarga')->nullable();
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
        Schema::dropIfExists('grupo_familiar');
    }
}
