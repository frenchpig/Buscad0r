<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Data;

class DataSeeder extends Seeder
{
    public function run(): void
    {
        Data::create([
            'Equipo' => 'SW-CORE-01',
            'Comuna' => 'Las Condes',
            'Sitio' => 'DataCenter 1',
            'Proveedor' => 'Cisco',
            'Familia' => 'Catalyst',
            'Plataforma' => '9300',
            'IP' => '10.100.0.1',
            'Descriptor' => 'Switch Core Nivel 3',
            'Contraseña' => 'supersecreto',
            'N_Nodo' => 'N-100'
        ]);
    }
}
