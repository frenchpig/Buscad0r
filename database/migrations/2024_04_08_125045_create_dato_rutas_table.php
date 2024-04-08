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
        Schema::create('dato_rutas', function (Blueprint $table) {
            $table->id();
            $table->string('CLIENTE')->nullable();
            $table->string('NUMERO_DE_SERVICIO')->nullable();
            $table->string('TIPO_ENLACE')->nullable();
            $table->string('LADO_A')->nullable();
            $table->string('NODO')->nullable();
            $table->string('RUTA')->nullable();
            $table->string('RACK_A')->nullable();
            $table->string('ODF_A')->nullable();
            $table->string('POS_A')->nullable();
            $table->string('LADO_B')->nullable();
            $table->string('SALA')->nullable();
            $table->string('RACK_B')->nullable();
            $table->string('ODF_B')->nullable();
            $table->string('POS_B')->nullable();
            $table->string('NIVELES_HISTORICOS')->nullable();
            $table->string('Seguimiento_y_contactos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dato_rutas');
    }
};
