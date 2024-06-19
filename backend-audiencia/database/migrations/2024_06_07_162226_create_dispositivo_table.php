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
        Schema::create('Dispositivo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('Usuario')->onDelete('cascade');
            $table->string('nombreDispositivo',255);
            $table->string('direccionIP',15);
            $table->string('tipoDispositivo',50);
            $table->string('marca',50);
            $table->string('modelo',50);
            $table->string('sistemaOperativo',50);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Dispositivo');
    }
};
