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
        Schema::create('postulantes', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->date('fecha_matricula')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('url_foto')->nullable();
            $table->string('cargo_ocupa')->nullable();
            $table->timestamps();
            // $table->unsignedBigInteger('id_estado_civil')->nullable();
            //Relacion de Muchos a 1 --> 1 Estado Civil tiene muchos postulantes
            // $table->foreign('id_estado_civil')->references('id')->on('estado_civils')
            //         ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulantes');
    }
};
