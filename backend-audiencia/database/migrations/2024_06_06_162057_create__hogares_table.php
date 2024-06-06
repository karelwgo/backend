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
        Schema::create('Hogares', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('nivel_socioeconomico', 255);
            $table->string('proveedor_internet', 255);
            $table->decimal('latitud', 19, 15);
            $table->decimal('longitud', 19, 15);
            $table->boolean('raspberry_asignada');
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
        Schema::dropIfExists('Hogares');
    }
};