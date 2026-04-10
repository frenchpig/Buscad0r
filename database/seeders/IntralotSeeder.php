<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Intralot;

class IntralotSeeder extends Seeder
{
    public function run(): void
    {
        Intralot::create([
            'LOTOS_INTRALOT' => '1001',
            'DIRECCION' => 'Calle Falsa 123',
            'COD_DE_SERVICIO' => 'INT-001',
            'CIUDAD' => 'Santiago',
            'RED_LAN' => '192.168.10.0',
            'MASCARA' => '255.255.255.0',
            'IP_LOOPBACK' => '10.10.10.1',
            'CTO_AGENCIA' => 'Juan Perez',
            'TLF_AGENCIA' => '987654321',
            'EQUIPO' => 'Router-1',
            'Equipo2' => 'Switch-1',
            'Chip' => 'CHIP-001'
        ]);
    }
}
