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
        Schema::create('intralot', function (Blueprint $table) {
            $table->id();
            $table->integer('LOTOS_INTRALOT')->nullable();
            $table->string('DIRECCION')->nullable();
            $table->string('COD_DE_SERVICIO')->nullable();
            $table->string('CIUDAD')->nullable();
            $table->string('RED_LAN')->nullable();
            $table->string('MASCARA')->nullable();
            $table->string('IP_LOOPBACK')->nullable();
            $table->string('CTO_AGENCIA')->nullable();
            $table->string('TLF_AGENCIA')->nullable();
            $table->string('EQUIPO')->nullable();
            $table->string('Equipo2')->nullable();
            $table->string('Chip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intralot');
    }
};
