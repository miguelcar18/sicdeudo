<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosInteresAyudantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_interes_ayudantias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lugar')->nullable();
            $table->text('habilidades');
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('datos_interes_ayudantias');
    }
}
