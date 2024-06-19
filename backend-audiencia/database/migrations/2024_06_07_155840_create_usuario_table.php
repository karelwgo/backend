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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hogar');
            $table->foreign('id_hogar')->references('id')->on('Hogares')->onDelete('cascade');
            $table->string('Nombre',255);
            $table->string('apellidoPaterno',255);
            $table->string('apellidoMaterno',255);
            $table->string('genero',20);
            $table->string('fechaNacimiento');
            $table->string('correoElectronico',255);
            $table->string('nivelEduacion',255);
            $table->string('estadoCivil',255);
            $table->string('ocupacion',255);
            $table->integer('numeroControl');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
