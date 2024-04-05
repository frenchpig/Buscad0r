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
        Schema::create('data_loteria', function (Blueprint $table) {
            $table->id();
            $table->string('RED');
            $table->string('GW');
            $table->string('RANGO_DE_IP_DHCP');
            $table->string('BROADCAST');
            $table->string('Cod_Local');
            $table->string('Solot');
            $table->string('Codigo_de_servicio');
            $table->string('Agente');
            $table->string('Direccion');
            $table->string('Contacto');
            $table->string('Horario_de_atencion');
            $table->string('Comuna');
            $table->string('Region');
            $table->string('Terminales');
            $table->string('Fecha_Implementacion');
            $table->string('Numero_de_Serie_40F_3G_4G');
            $table->string('Numero_de_serie_211E_extender');
            $table->string('Numero_de_Serie_SIM_CLARO');
            $table->string('Tunnel_1_Datos');
            $table->string('Tunnel_2_Datos');
            $table->string('Tunnel_3_Datos');
            $table->string('Tunnel_1_Internet');
            $table->string('Tunnel_2_Internet');
            $table->string('Tunnel_3_Internet');
            $table->string('Numero_de_Serie_SIM_Internet_ISP_X');
            $table->string('IP_Loopback_32');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_loteria');
    }
};
