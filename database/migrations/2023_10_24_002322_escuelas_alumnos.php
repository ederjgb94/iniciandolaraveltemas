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
        Schema::create(
            'escuelas_alumnos',
            function (Blueprint $table) {


                //FORMA SIMPLIFICADA
                $table->foreignId('alumno_id')->constrained();

                //FORMA EXPLICITA
                $table->unsignedBigInteger('escuela_id');
                $table->foreign('escuela_id')
                    ->references('id')->on('escuelas');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computadoras');
    }
};
