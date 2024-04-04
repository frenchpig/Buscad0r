<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Intralot;

class UploaderController extends Controller
{
    public function uploadIntralot(Request $request){
        $data = $request->all();
        Log::info($data);
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
}
