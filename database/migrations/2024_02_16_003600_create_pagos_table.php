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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->float('monto');
            $table->date('fecha_pago');
            $table->unsignedBigInteger('miembro_id')->unsigned();
            $table->unsignedBigInteger('ministerio_id')->unsigned();
            $table->text('concepto')->nullable;
            $table->timestamps();

            $table->foreign('miembro_id')->references('id')->on('miembros')->onDelete('cascade');
            $table->foreign('ministerio_id')->references('id')->on('ministerios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
