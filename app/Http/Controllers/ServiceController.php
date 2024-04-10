<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function insertData(Request $request)
    {
        $data = $request->all();
        Log::info(gettype($data));
        foreach ($data as $row) {
            $dataLoad = [
                'condicion' => $row['CONDICION'] ?? null,
                'ip_loop' => $row['IP_LOOP'] ?? null,
                'cliente' => $row['CLIENTE'] ?? null,
                'cod' => $row['COD'] ?? null,
                'comuna' => $row['COMUNA'] ?? null,
                'direccion' => $row['DIRECCION'] ?? null,
                'lan' => $row['LAN'] ?? null,
                'protocolo' => $row['PROTOCOLO'] ?? null,
                'servicio' => $row['SERVICIO'] ?? null,
                'vrf' => $row['VRF'] ?? null,
                'wan' => $row['WAN'] ?? null,
                'nombre_equipo' => $row['NOMBRE EQUIPO'] ?? null,
                'ip_equipo' => $row['IP EQUIPO'] ?? null,
                'descripcion' => $row['DESCRIPCION'] ?? null,
                'puerta' => $row['PUERTA'] ?? null,
                'vlan' => $row['VLAN'] ?? null,
                'posiciones' => $row['POSICIONES'] ?? null,
                'proveedor' => $row['PROVEEDOR'] ?? null,
                'codigo' => $row['CODIGO'] ?? null,
            ];
            Servicio::create($dataLoad);
        }
        // Por ejemplo, puedes devolver una respuesta indicando que los datos fueron recibidos con éxito
        return response()->json(['message' => 'Datos recibidos correctamente']);
    }
}
