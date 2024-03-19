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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('condicion')->nullable();
            $table->string('ip_loop')->nullable();
            $table->string('cliente')->nullable();
            $table->string('cod')->nullable();
            $table->string('comuna')->nullable();
            $table->string('direccion')->nullable();
            $table->string('lan')->nullable();
            $table->string('protocolo')->nullable();
            $table->string('servicio')->nullable();
            $table->string('vrf')->nullable();
            $table->string('wan')->nullable();
            $table->string('nombre_equipo')->nullable();
            $table->string('ip_equipo')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('puerta')->nullable();
            $table->string('vlan')->nullable();
            $table->string('posiciones')->nullable();
            $table->string('proveedor')->nullable();
            $table->string('codigo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
