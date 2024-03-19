<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function insertData(Request $request)
    {
        $data = $request->json()->all();
        
        // // Mostrar el contenido del array en PHP
        // echo "<pre>";
        // print_r($data); // Opcionalmente, puedes usar var_dump($data);
        // echo "</pre>";

        foreach ($data as $row) {
            $rowData = [
                'condicion' => $fila['CONDICION'] ?? null,
                'ip_loop' => $fila['IP_LOOP'] ?? null,
                'cliente' => $fila['CLIENTE'] ?? null,
                'cod' => $fila['COD'] ?? null,
                'comuna' => $fila['COMUNA'] ?? null,
                'direccion' => $fila['DIRECCION'] ?? null,
                'lan' => $fila['LAN'] ?? null,
                'protocolo' => $fila['PROTOCOLO'] ?? null,
                'servicio' => $fila['SERVICIO'] ?? null,
                'vrf' => $fila['VRF'] ?? null,
                'wan' => $fila['WAN'] ?? null,
                'nombre_equipo' => $fila['NOMBRE EQUIPO'] ?? null,
                'ip_equipo' => $fila['IP EQUIPO'] ?? null,
                'descripcion' => $fila['DESCRIPCION'] ?? null,
                'puerta' => $fila['PUERTA'] ?? null,
                'vlan' => $fila['VLAN'] ?? null,
                'posiciones' => $fila['POSICIONES'] ?? null
            ];
            servicios::create($rowData);
        }
        
        return response()->json(['message' => 'Datos insertados con éxito']);
    }
}
