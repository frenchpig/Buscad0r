<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Intralot;
use App\Models\DataLoteria;
use App\Models\DatoRuta;
use App\Models\Data;
use Illuminate\Support\Facades\Log;

class EditorController extends Controller
{
    public function editService(Request $request){
      $cod = $request->cod;
      $serviceOnDB = Servicio::where("cod",$cod)->first();
      if($serviceOnDB){
        $serviceOnDB->condicion = $request->condicion;
        $serviceOnDB->ip_loop = $request->ip_loop;
        $serviceOnDB->cliente = $request->cliente;
        $serviceOnDB->comuna = $request->comuna;
        $serviceOnDB->direccion = $request->direccion;
        $serviceOnDB->lan = $request->lan;
        $serviceOnDB->protocolo = $request->protocolo;
        $serviceOnDB->servicio = $request->servicio;
        $serviceOnDB->vrf = $request->vrf;
        $serviceOnDB->wan = $request->wan;
        $serviceOnDB->nombre_equipo = $request->nombre_equipo;
        $serviceOnDB->ip_equipo = $request->ip_equipo;
        $serviceOnDB->descripcion = $request->descripcion;
        $serviceOnDB->puerta = $request->puerta;
        $serviceOnDB->vlan = $request->vlan;
        $serviceOnDB->posiciones = $request->posiciones;
        $serviceOnDB->save();
        return response()->json(['message' => 'Servicio Guardado!', 'code' => 200]);
      }
      return response()->json(['message'=> 'Servicio No encontrado!','code'=> 404]);
    }

    public function editIntralot(Request $request){
      $code = $request->COD_DE_SERVICIO;
      $intralotOnDB = Intralot::where('COD_DE_SERVICIO',$code)->first();
      if($intralotOnDB){
        $intralotOnDB->LOTOS_INTRALOT = $request->LOTOS_INTRALOT;
        $intralotOnDB->DIRECCION = $request->DIRECCION;
        $intralotOnDB->CIUDAD = $request->CIUDAD;
        $intralotOnDB->RED_LAN = $request->RED_LAN;
        $intralotOnDB->MASCARA = $request->MASCARA;
        $intralotOnDB->IP_LOOPBACK = $request->IP_LOOPBACK;
        $intralotOnDB->CTO_AGENCIA = $request->CTO_AGENCIA;
        $intralotOnDB->TLF_AGENCIA = $request->TLF_AGENCIA;
        $intralotOnDB->EQUIPO = $request->EQUIPO;
        $intralotOnDB->Equipo2 = $request->Equipo2;
        $intralotOnDB->Chip = $request->Chip;
        $intralotOnDB->save();
        return response()->json(['message' => 'Intralot Guardada!','code'=>200]);
      }
      return response()->json(['message'=> 'Intralot No encontrada','code'=> 404]);
    }
}
