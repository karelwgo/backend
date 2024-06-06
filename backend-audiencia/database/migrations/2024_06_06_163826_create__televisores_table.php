<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Televisores', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_hogar'); 
            $table->string('tamano', 20); 
            $table->string('marca', 50); 
            $table->string('resolucion', 20); 
            $table->string('esp32MAC', 255); 
            $table->enum('estado', ['apagado', 'encendido']);

            $table->foreign('id_hogar')->references('id')->on('Hogares')->onDelete('cascade');
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
        Schema::dropIfExists('Televisores');
    }
};
