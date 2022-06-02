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
        Schema::create('psicofisicos', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_realizacion');
            $table->boolean('hizo_reserva')->default(false);
            $table->boolean('tiene_sobre')->default(false);
            $table->unsignedBigInteger('id_postulante')->unique();
            $table->foreign('id_postulante')->references('id')->on('psicofisicos')->onDelete('cascade');

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
        Schema::dropIfExists('psicofisicos');
    }
};
