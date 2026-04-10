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
                'condicion' => $row['condicion'] ?? $row['CONDICION'] ?? null,
                'ip_loop' => $row['ip_loop'] ?? $row['IP_LOOP'] ?? null,
                'cliente' => $row['cliente'] ?? $row['CLIENTE'] ?? null,
                'cod' => $row['cod'] ?? $row['COD'] ?? null,
                'comuna' => $row['comuna'] ?? $row['COMUNA'] ?? null,
                'direccion' => $row['direccion'] ?? $row['DIRECCION'] ?? null,
                'lan' => $row['lan'] ?? $row['LAN'] ?? null,
                'protocolo' => $row['protocolo'] ?? $row['PROTOCOLO'] ?? null,
                'servicio' => $row['servicio'] ?? $row['SERVICIO'] ?? null,
                'vrf' => $row['vrf'] ?? $row['VRF'] ?? null,
                'wan' => $row['wan'] ?? $row['WAN'] ?? null,
                'nombre_equipo' => $row['nombre_equipo'] ?? $row['NOMBRE EQUIPO'] ?? null,
                'ip_equipo' => $row['ip_equipo'] ?? $row['IP EQUIPO'] ?? null,
                'descripcion' => $row['descripcion'] ?? $row['DESCRIPCION'] ?? null,
                'puerta' => $row['puerta'] ?? $row['PUERTA'] ?? null,
                'vlan' => $row['vlan'] ?? $row['VLAN'] ?? null,
                'posiciones' => $row['posiciones'] ?? $row['POSICIONES'] ?? null,
                'proveedor' => $row['proveedor'] ?? $row['PROVEEDOR'] ?? null,
                'codigo' => $row['codigo'] ?? $row['CODIGO'] ?? null,
            ];
            Servicio::create($dataLoad);
        }
        // Por ejemplo, puedes devolver una respuesta indicando que los datos fueron recibidos con éxito
        return response()->json(['message' => 'Datos recibidos correctamente']);
    }
}
