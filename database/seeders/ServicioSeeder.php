<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        Servicio::create([
            'condicion' => 'ACTIVO',
            'ip_loop' => '10.0.0.1',
            'cliente' => 'Cliente Demo S.A.',
            'cod' => 'SRV-001',
            'comuna' => 'Santiago',
            'direccion' => 'Av. Demo 123',
            'lan' => '192.168.1.0',
            'protocolo' => 'BGP',
            'servicio' => 'Internet',
            'vrf' => 'VRF-DEMO',
            'wan' => '172.16.0.1',
            'nombre_equipo' => 'RTR-SCL-01',
            'ip_equipo' => '10.0.0.2',
            'descripcion' => 'Enlace Principal',
            'puerta' => 'GigabitEthernet0/0/0',
            'vlan' => '100',
            'posiciones' => 'R1-P1'
        ]);
    }
}
