<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DatoRuta;

class DatoRutaSeeder extends Seeder
{
    public function run(): void
    {
        DatoRuta::create([
            'CLIENTE' => 'Empresa FO',
            'NUMERO_DE_SERVICIO' => 'FO-001',
            'TIPO_ENLACE' => 'Fibra Oscura',
            'LADO_A' => 'Edificio A',
            'NODO' => 'Nodo Central',
            'RUTA' => 'Ruta Norte',
            'RACK_A' => 'Rack 01',
            'ODF_A' => 'ODF-A1',
            'POS_A' => 'Pos-01',
            'LADO_B' => 'Edificio B',
            'SALA' => 'Sala Servidores',
            'RACK_B' => 'Rack 02',
            'ODF_B' => 'ODF-B1',
            'POS_B' => 'Pos-02',
            'NIVELES_HISTORICOS' => '-20dBm',
            'Seguimiento_y_contactos' => 'Contacto Soporte FO'
        ]);
    }
}
