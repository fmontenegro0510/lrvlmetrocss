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
        Schema::create('telefonos', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Add this line
            $table->id();
            $table->unsignedBigInteger('id_postulante');
            $table->string('numero');
            $table->timestamps();
            //Relacion de 1 a Muchos --> 1 postulante tiene muchos telefonos
            $table->foreign('id_postulante')->references('id')->on('postulantes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefonos');
    }
};
