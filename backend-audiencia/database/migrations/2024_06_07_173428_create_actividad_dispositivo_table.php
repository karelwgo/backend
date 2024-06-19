<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_dispositivo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dispositivo');
            $table->foreign('id_dispositivo')->references('id')->on('dispositivo')->onDelete('cascade');
            $table->string('nombre_pagina',255);
            $table->timestamp('fecha_hora');
            $table->integer('id_raspberry');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_dispositivo');
    }
};
