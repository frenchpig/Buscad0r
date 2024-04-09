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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('Equipo')->nullable();
            $table->string('Comuna')->nullable();
            $table->string('Sitio')->nullable();
            $table->string('Proveedor')->nullable();
            $table->string('Familia')->nullable();
            $table->string('Plataforma')->nullable();
            $table->ipAddress('IP')->nullable();
            $table->string('Descriptor')->nullable();
            $table->string('Contraseña')->nullable();
            $table->string('N_Nodo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
