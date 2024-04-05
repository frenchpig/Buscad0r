<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Intralot;
use App\Models\DataLoteria;

class UploaderController extends Controller
{
    public function uploadIntralot(Request $request){
        $data = $request->all();
        foreach ($data as $row) {
            $dataLoad = [
                'LOTOS_INTRALOT' => $row['LOTOS INTRALOT'] ?? null,
                'DIRECCION' => $row['DIRECCIÓN'] ?? null,
                'COD_DE_SERVICIO' => $row['COD. DE SERVICIO'] ?? null,
                'CIUDAD' => $row['CIUDAD'] ?? null,
                'RED_LAN' => $row['RED LAN'] ?? null,
                'MASCARA' => $row['MASCARA'] ?? null,
                'IP_LOOPBACK' => $row['IP LOOPBACK'] ?? null,
                'CTO_AGENCIA' => $row['CTO AGENCIA'] ?? null,
                'TLF_AGENCIA' => $row['TLF AGENCIA'] ?? null,
                'EQUIPO' => $row['EQUIPO'] ?? null,
                'Equipo2' => $row['Equipo2'] ?? null,
                'Chip' => $row['Chip'] ?? null
            ];
            Intralot::create($dataLoad);
        }
        return response()->json(['message' => 'Datos de Intralot recibidos correctamente']);
    }
    public function uploadDataLoteria (Request $request){
        $data = $request->all();
        foreach ($data as $row) {
            $dataLoad = [
                'RED'=> $row['RED'] ?? null,
                'GW'=> $row['GW'] ?? null,
                'RANGO_DE_IP_DHCP'=> $row['RANGO DE IP DHCP'] ?? null,
                'RANGO_DE_IP_DHCP_2'=> $row['__EMPTY'] ?? null,
                'BROADCAST'=> $row['BROADCAST'] ?? null,
                'Cod_Local'=> $row['Cod. Local'] ?? null,
                'Solot'=> $row['Solot'] ?? null,
                'Codigo_de_servicio'=> $row['Código de servicio'] ?? null,
                'Agente'=> $row['Agente'] ?? null,
                'Direccion'=> $row['Dirección'] ?? null,
                'Contacto'=> $row['Contacto'] ?? null,
                'Horario_de_atencion'=> $row['Horario de atención'] ?? null,
                'Comuna'=> $row['Comuna'] ?? null,
                'Region'=> $row['Region'] ?? null,
                'Terminales'=> $row['Terminales'] ?? null,
                'Fecha_Implementacion'=> $row['Fecha Implementacion'] ?? null,
                'Numero_de_Serie_40F_3G_4G'=> $row['N° de Serie 40F 3G/4G'] ?? null,
                'Numero_de_serie_211E_extender'=> $row['N° de serie 211E extender'] ?? null,
                'Numero_de_Serie_SIM_CLARO'=> $row['N° de Serie SIM CLARO'] ?? null,
                'Tunnel_1_Datos'=> $row['Tunnel 1 Datos'] ?? null,
                'Tunnel_2_Datos'=> $row['Tunnel 2 Datos'] ?? null,
                'Tunnel_3_Datos'=> $row['Tunnel 3 Datos'] ?? null,
                'Tunnel_1_Internet'=> $row['Tunnel 1 Internet'] ?? null,
                'Tunnel_2_Internet'=> $row['Tunnel 2 Internet'] ?? null,
                'Tunnel_3_Internet'=> $row['Tunnel 3 Internet'] ?? null,
                'Numero_de_Serie_SIM_Internet_ISP_X'=> $row['N° de Serie SIM Internet ISP X'] ?? null,
                'IP_Loopback_32'=> $row['IP Loopback /32'] ?? null
            ];
            DataLoteria::create($dataLoad);
        }
    }
}
