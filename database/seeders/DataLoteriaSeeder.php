<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataLoteria;

class DataLoteriaSeeder extends Seeder
{
    public function run(): void
    {
        DataLoteria::create([
            'RED' => '192.168.20.0',
            'GW' => '192.168.20.1',
            'RANGO_DE_IP_DHCP' => '192.168.20.10-100',
            'BROADCAST' => '192.168.20.255',
            'Cod_Local' => 'LOC-001',
            'Solot' => 'S123',
            'Codigo_de_servicio' => 'LOT-001',
            'Agente' => 'Agencia Central',
            'Direccion' => 'Pasaje Loteria 456',
            'Contacto' => 'Maria Lopez',
            'Horario_de_atencion' => '09:00 - 18:00',
            'Comuna' => 'Providencia',
            'Region' => 'Metropolitana',
            'Terminales' => '2',
            'Fecha_Implementacion' => '2023-01-01',
            'Numero_de_Serie_40F_3G_4G' => 'SN123456',
            'Numero_de_serie_211E_extender' => 'EXT98765',
            'Numero_de_Serie_SIM_CLARO' => 'SIM112233',
            'IP_Loopback_32' => '10.20.20.1'
        ]);
    }
}
