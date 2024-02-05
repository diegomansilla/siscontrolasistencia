<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('miembros', function (Blueprint $table) {

            $table->id();

            $table->string('nombre_apellido', length: 255);
            $table->string('direccion', length: 255);
            $table->string('telefono', length: 100);
            $table->string('fcha_nacimiento', length: 100);
            $table->string('genero', length: 50);
            $table->string('email', length: 255)->unique();
            $table->string('estado', length: 5);
            $table->string('ministerio', length: 255);
            $table->text('imagen')->nullable;
            $table->string('fcha_ingreso', length: 100);


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros');
    }
};
