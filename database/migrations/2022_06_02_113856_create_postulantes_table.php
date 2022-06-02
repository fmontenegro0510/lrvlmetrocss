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
            $table->engine = 'InnoDB'; // Add this line
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->date('fecha_matricula')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('url_foto')->nullable();
            $table->string('cargo_ocupa')->nullable();
            $table->unsignedBigInteger('id_civil');
            $table->timestamps();
            $table->foreign('id_civil')->references('id')->on('civils')
                    ->onDelete('set null')
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
        Schema::dropIfExists('postulantes');
    }
};
