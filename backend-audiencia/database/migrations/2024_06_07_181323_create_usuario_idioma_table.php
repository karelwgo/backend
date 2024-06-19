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
        Schema::create('usuario_idioma', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('Usuario')->onDelete('cascade');
            $table->unsignedBigInteger('id_idioma');
            $table->foreign('id_idioma')->references('id')->on('idioma')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_idioma');
    }
};
