<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SearcherConfig;
use App\Models\SearcherField;

class SearcherSystemSeeder extends Seeder
{
    public function run(): void
    {
        $tables = [
            'Servicio' => [
                ['condicion', 'Condicion', 'text', true],
                ['ip_loop', 'IP Loop', 'text', true],
                ['cliente', 'Cliente', 'text', true],
                ['cod', 'Codigo de Servicio', 'text', true],
                ['comuna', 'Comuna', 'text', true],
                ['direccion', 'Direccion', 'text', true],
                ['lan', 'LAN', 'text', true],
                ['protocolo', 'Protocolo', 'text', true],
                ['servicio', 'Servicio', 'text', true],
                ['vrf', 'VRF', 'text', true],
                ['wan', 'WAN', 'text', true],
                ['nombre_equipo', 'Nombre Equipo', 'text', true],
                ['ip_equipo', 'IP Equipo', 'text', true],
                ['descripcion', 'Descripción', 'text', true],
                ['puerta', 'Puerta', 'text', true],
                ['vlan', 'VLAN', 'text', true],
                ['posiciones', 'Posiciones', 'text', true],
            ],
            'Intralot' => [
                ['LOTOS_INTRALOT', 'Lotos Intralot', 'number', true],
                ['DIRECCION', 'Direccion', 'text', true],
                ['COD_DE_SERVICIO', 'Codigo De Servicio', 'text', true],
                ['CIUDAD', 'Ciudad', 'text', true],
                ['RED_LAN', 'Red LAN', 'text', true],
                ['MASCARA', 'Mascara', 'text', true],
                ['IP_LOOPBACK', 'IP LOOPBACK', 'text', true],
                ['CTO_AGENCIA', 'Contacto Agencia', 'text', true],
                ['TLF_AGENCIA', 'Telefono Agencia', 'text', true],
                ['EQUIPO', 'Equipo', 'text', true],
                ['Equipo2', 'Equipo 2', 'text', true],
                ['Chip', 'Chip', 'text', true],
            ],
            'DataLoteria' => [
                ['DataLoteria_Codigo_de_servicio', 'Codigo De Servicio', 'text', true],
                ['DataLoteria_Direccion', 'Direccion', 'text', true],
                ['DataLoteria_Contacto', 'Contacto', 'text', false],
                ['DataLoteria_Comuna', 'Comuna', 'text', true],
                ['DataLoteria_Region', 'Region', 'text', true],
                ['DataLoteria_Terminales', 'Terminales', 'text', false],
                ['DataLoteria_Fecha_Implementacion', 'Fecha Implementacion', 'text', false],
                ['DataLoteria_Numero_de_Serie_40F_3G_4G', 'Numero de Serie 40F 3G 4G', 'text', true],
                ['DataLoteria_Numero_de_serie_211E_extender', 'Numero de serie 211E extender', 'text', false],
                ['DataLoteria_Numero_de_Serie_SIM_CLARO', 'Numero de Serie SIM CLARO', 'text', true],
                ['DataLoteria_Tunnel_1_Datos', 'Tunnel 1 Datos', 'text', false],
                ['DataLoteria_Tunnel_1_Internet', 'Tunnel 1 Internet', 'text', false],
                ['DataLoteria_RED', 'RED', 'text', true],
                ['DataLoteria_GW', 'GW', 'text', true],
                ['DataLoteria_RANGO_DE_IP_DHCP', 'RANGO DE IP DHCP', 'text', false],
                ['DataLoteria_RANGO_DE_IP_DHCP_2', 'RANGO DE IP DHCP 2', 'text', false],
                ['DataLoteria_BROADCAST', 'BROADCAST', 'text', false],
                ['DataLoteria_Cod_Local', 'Cod Local', 'text', false],
                ['DataLoteria_Solot', 'Solot', 'text', false],
                ['DataLoteria_Agente', 'Agente', 'text', false],
                ['DataLoteria_Horario_de_atencion', 'Horario de Atencion', 'text', false],
                ['DataLoteria_Tunnel_2_Datos', 'Tunnel 2 Datos', 'text', false],
                ['DataLoteria_Tunnel_3_Datos', 'Tunnel 3 Datos', 'text', false],
                ['DataLoteria_Tunnel_2_Internet', 'Tunnel 2 Internet', 'text', false],
                ['DataLoteria_Tunnel_3_Internet', 'Tunnel 3 Internet', 'text', false],
                ['DataLoteria_Numero_de_Serie_SIM_Internet_ISP_X', 'Numero de Serie SIM Internet ISP X', 'text', false],
                ['DataLoteria_IP_Loopback_32', 'IP Loopback 32', 'text', true],
            ],
            'DatoRutas' => [
                ['DatoRutas_CLIENTE', 'Cliente', 'text', true],
                ['DatoRutas_NUMERO_DE_SERVICIO', 'Numero de Servicio', 'text', true],
                ['DatoRutas_TIPO_ENLACE', 'Tipo de Enlace', 'text', true],
                ['DatoRutas_LADO_A', 'Lado A', 'text', true],
                ['DatoRutas_NODO', 'Nodo', 'text', true],
                ['DatoRutas_RUTA', 'Ruta', 'text', true],
                ['DatoRutas_RACK_A', 'Rack A', 'text', true],
                ['DatoRutas_ODF_A', 'ODF A', 'text', true],
                ['DatoRutas_POS_A', 'Posición A', 'text', true],
                ['DatoRutas_LADO_B', 'Lado B', 'text', true],
                ['DatoRutas_SALA', 'Sala', 'text', true],
                ['DatoRutas_RACK_B', 'Rack B', 'text', true],
                ['DatoRutas_ODF_B', 'ODF B', 'text', true],
                ['DatoRutas_POS_B', 'Posición B', 'text', true],
                ['DatoRutas_NIVELES_HISTORICOS', 'Niveles Históricos', 'text', true],
                ['DatoRutas_Seguimiento_y_contactos', 'Seguimiento y Contactos', 'text', true],
            ],
            'Data' => [
                ['Data_Equipo', 'Equipo', 'text', true],
                ['Data_Comuna', 'Comuna', 'text', true],
                ['Data_Sitio', 'Sitio', 'text', true],
                ['Data_Proveedor', 'Proveedor', 'text', true],
                ['Data_Familia', 'Familia', 'text', true],
                ['Data_Plataforma', 'Plataforma', 'text', true],
                ['Data_IP', 'IP', 'text', true],
                ['Data_Descriptor', 'Descriptor', 'text', true],
                ['Data_Contraseña', 'Contraseña', 'text', true],
                ['Data_N_Nodo', 'N Nodo', 'text', true],
            ]
        ];

        foreach($tables as $tableName => $fields) {
            SearcherConfig::firstOrCreate(
                ['table_name' => $tableName],
                ['columns_per_row' => 3]
            );

            $order = 0;
            foreach($fields as $f) {
                SearcherField::updateOrCreate(
                    [
                        'table_name' => $tableName,
                        'field_id' => $f[0]
                    ],
                    [
                        'label' => $f[1],
                        'type' => $f[2],
                        'is_visible' => $f[3],
                        'order' => $order++
                    ]
                );
            }
        }
    }
}
