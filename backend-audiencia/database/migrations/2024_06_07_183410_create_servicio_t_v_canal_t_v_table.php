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
        Schema::create('servicioTV_canalTV', function (Blueprint $table) {
            $table->unsignedBigInteger('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('serviciotv')->onDelete('cascade');
            $table->unsignedBigInteger('id_canal');
            $table->foreign('id_canal')->references('id')->on('canaltv')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_t_v_canal_t_v');
    }
};
