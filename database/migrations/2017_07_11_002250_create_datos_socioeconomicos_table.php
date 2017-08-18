<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosSocioeconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_socioeconomicos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('ingresosPadres');
            $table->double('ingresosFamiliares');
            $table->double('ingresosBecas');
            $table->double('ingresosAyudantias');
            $table->double('ingresosPreparadurias');
            $table->double('ingresosTrabajo');
            $table->double('ingresosAhorros');
            $table->double('ingresosOtros')->nullable();
            $table->string('alojamientoLocalidad');
            $table->string('alojamientoRegiones');
            $table->string('condicionesEstudio');
            $table->integer('camasHabitacion');
            $table->string('condicionesHigienicas');
            $table->string('ventilacion');
            $table->string('iluminacion');
            $table->string('otros')->nullable();
            $table->string('desayunoLugar');
            $table->string('almuerzoLugar');
            $table->string('cenaLugar');
            $table->double('desayunoCosto');
            $table->double('almuerzoCosto');
            $table->double('cenaCosto');
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
        Schema::dropIfExists('datos_socioeconomicos');
    }
}
