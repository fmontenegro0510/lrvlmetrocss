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
        Schema::create('documentacions', function (Blueprint $table) {
            $table->id();
            $table->date('buena_conducta');
            $table->boolean('foto')->default(false);
            $table->date('antiguedad');
            $table->date('sanciones');
            $table->date('certificado_domicilio');
            $table->date('redam');
            $table->boolean('titulo_autenticado')->default(false);
            $table->date('psicofisico');
            $table->string('informacion_sumaria');
            $table->string('matricula');
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
        Schema::dropIfExists('documentacions');
    }
};
