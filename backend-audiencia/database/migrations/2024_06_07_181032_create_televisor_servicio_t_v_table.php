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
        Schema::create('Televisor__servicioTV', function (Blueprint $table) {
            $table->unsignedBigInteger('id_televisor');
            $table->foreign('id_televisor')->references('id')->on('televisor')->onDelete('cascade');
            $table->unsignedBigInteger('id_servicio_tv');
            $table->foreign('id_servicio_tv')->references('id')->on('serviciotv')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Televisor__servicioTV');
    }
};
