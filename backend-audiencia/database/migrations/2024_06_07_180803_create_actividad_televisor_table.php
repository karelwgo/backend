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
        Schema::create('Actividad_televisor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_televisor');
            $table->foreign('id_televisor')->references('id')->on('televisor')->onDelete('cascade');
            $table->unsignedBigInteger('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('serviciotv')->onDelete('cascade');
            $table->string('nomnbre_canal_visto',100);
            $table->integer('numero_canal_visto');
            $table->dateTime('fecha_hora_inicio');
            $table->dateTime('fecha_hora_fin');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Actividad_televisor');
    }
};
