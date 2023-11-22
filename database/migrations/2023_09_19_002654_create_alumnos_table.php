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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');

            // $table->foreignId('escuela_id')->constrained();

            //AQUI SE VEN DOS FORMAS DE PONER RELACIONES EN TABLAS
            // $table->unsignedBigInteger('escuelaid');
            // $table->foreign('escuelaid')->references('id')->on('escuelas');

            //ACA SE VE COMO EL NOMBRE DE LA COLUMNA ES DIFERENTE POR EL GUION BAJO y ESTO FUNCIONA IGUAL
            // $table->unsignedBigInteger('escuela_id');
            // $table->foreign('escuela_id')->references('id')->on('escuelas');

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
        Schema::dropIfExists('alumnos');
    }
};
