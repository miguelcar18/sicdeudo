<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellidosNombres');
            $table->integer('cedula');
            $table->integer('edad');
            $table->date('fechaNacimiento')->nullable();
            $table->string('estadoCivil');
            $table->string('lugarNacimiento')->nullable();
            $table->text('direccionPermanente');
            $table->text('direccionLocal');
            $table->string('telefonoCelular');
            $table->string('telefonoReferencia');
            $table->string('email');
            $table->string('estado')->nullable();
            $table->integer('supervisor')->unsigned();
            $table->integer('usuario')->unsigned();
            $table->foreign('supervisor')->references('id')->on('supervisores')->onDelete('cascade');
            $table->foreign('usuario')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('datos_personales');
    }
}
