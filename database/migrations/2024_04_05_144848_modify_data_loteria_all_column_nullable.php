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
        Schema::table('data_loteria', function (Blueprint $table) {
            $table->string('RED')->nullable()->change();
            $table->string('GW')->nullable()->change();
            $table->string('RANGO_DE_IP_DHCP')->nullable()->change();
            $table->string('BROADCAST')->nullable()->change();
            $table->string('Cod_Local')->nullable()->change();
            $table->string('Solot')->nullable()->change();
            $table->string('Codigo_de_servicio')->nullable()->change();
            $table->string('Agente')->nullable()->change();
            $table->string('Direccion')->nullable()->change();
            $table->string('Contacto')->nullable()->change();
            $table->string('Horario_de_atencion')->nullable()->change();
            $table->string('Comuna')->nullable()->change();
            $table->string('Region')->nullable()->change();
            $table->string('Terminales')->nullable()->change();
            $table->string('Fecha_Implementacion')->nullable()->change();
            $table->string('Numero_de_Serie_40F_3G_4G')->nullable()->change();
            $table->string('Numero_de_serie_211E_extender')->nullable()->change();
            $table->string('Numero_de_Serie_SIM_CLARO')->nullable()->change();
            $table->string('Tunnel_1_Datos')->nullable()->change();
            $table->string('Tunnel_2_Datos')->nullable()->change();
            $table->string('Tunnel_3_Datos')->nullable()->change();
            $table->string('Tunnel_1_Internet')->nullable()->change();
            $table->string('Tunnel_2_Internet')->nullable()->change();
            $table->string('Tunnel_3_Internet')->nullable()->change();
            $table->string('Numero_de_Serie_SIM_Internet_ISP_X')->nullable()->change();
            $table->string('IP_Loopback_32')->nullable()->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
