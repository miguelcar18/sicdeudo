<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('dependencia');
            $table->string('extensionTelefono')->nullable();
            $table->string('relacion');
            $table->text('tareasAyudante')->nullable();
            $table->integer('permanecerSitio')->nullable();
            $table->text('detallesPermanencia')->nullable();
            $table->text('reubicacion')->nullable();
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
        Schema::dropIfExists('supervisores');
    }
}
