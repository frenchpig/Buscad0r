<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLoteria extends Model
{
    use HasFactory;

    protected $table = 'data_loteria';
    protected $fillable = [
        'RED',
        'GW',
        'RANGO_DE_IP_DHCP',
        'RANGO_DE_IP_DHCP_2',
        'BROADCAST',
        'Cod_Local',
        'Solot',
        'Codigo_de_servicio',
        'Agente',
        'Direccion',
        'Contacto',
        'Horario_de_atencion',
        'Comuna',
        'Region',
        'Terminales',
        'Fecha_Implementacion',
        'Numero_de_Serie_40F_3G_4G',
        'Numero_de_serie_211E_extender',
        'Numero_de_Serie_SIM_CLARO',
        'Tunnel_1_Datos',
        'Tunnel_2_Datos',
        'Tunnel_3_Datos',
        'Tunnel_1_Internet',
        'Tunnel_2_Internet',
        'Tunnel_3_Internet',
        'Numero_de_Serie_SIM_Internet_ISP_X',
        'IP_Loopback_32',
    ];
}
