<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('email');
            $table->string('fono');
            $table->string('invitado');
            $table->text('peticion');
            $table->date('nacimiento');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('comuna_id');
            $table->foreign('comuna_id')
                  ->references('id')
                  ->on('comunas');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')
                  ->references('id')
                  ->on('regiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miembros');
    }
}
