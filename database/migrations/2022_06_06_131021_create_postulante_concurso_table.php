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
        Schema::create('postulante_concurso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_postulante')->nullable();
            $table->unsignedBigInteger('id_concurso')->nullable();
            $table->foreign('id_postulante')->references('id')->on('postulantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_concurso')->references('id')->on('concursos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nivel_excelencia')->nullable();
            $table->string('fecha_inscripcion');           
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
        Schema::dropIfExists('postulante_concurso');
    }
};
