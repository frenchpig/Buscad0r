<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\DataLoteria;
use App\Models\Intralot;
use App\Models\DatoRuta;
use App\Models\Data;
use Illuminate\Support\Facades\Log;

class AdderController extends Controller
{
  public function addService(Request $request){
    $cod = $request->cod;
    Log::info($request);
    if(Servicio::where('cod', $cod)->doesntExist()){
      $service = new Servicio();
      $service->condicion = $request->condicion;
      $service->cod = $request->cod;
      $service->ip_loop = $request->ip_loop;
      $service->cliente = $request->cliente;
      $service->comuna = $request->comuna;
      $service->direccion = $request->direccion;
      $service->lan = $request->lan;
      $service->protocolo = $request->protocolo;
      $service->servicio = $request->servicio;
      $service->vrf = $request->vrf;
      $service->wan = $request->wan;
      $service->nombre_equipo = $request->nombre_equipo;
      $service->ip_equipo = $request->ip_equipo;
      $service->descripcion = $request->descripcion;
      $service->puerta = $request->puerta;
      $service->vlan = $request->vlan;
      $service->posiciones = $request->posiciones;
      $service->save();
      return response()->json(['message' => 'Servicio Guardado!', 'code' => 200]);
    }
    return response()->json(['message'=> 'Servicio ya existe!','code'=> 403]);
  }
  public function addIntralot(Request $request){
    $code = $request->COD_DE_SERVICIO;
    if(Intralot::where('COD_DE_SERVICIO', $code)->doesntExist()){
      $intralot = new Intralot();
      $intralot->LOTOS_INTRALOT = $request->LOTOS_INTRALOT;
      $intralot->COD_DE_SERVICIO = $request->COD_DE_SERVICIO;
      $intralot->DIRECCION = $request->DIRECCION;
      $intralot->CIUDAD = $request->CIUDAD;
      $intralot->RED_LAN = $request->RED_LAN;
      $intralot->MASCARA = $request->MASCARA;
      $intralot->IP_LOOPBACK = $request->IP_LOOPBACK;
      $intralot->CTO_AGENCIA = $request->CTO_AGENCIA;
      $intralot->TLF_AGENCIA = $request->TLF_AGENCIA;
      $intralot->EQUIPO = $request->EQUIPO;
      $intralot->Equipo2 = $request->Equipo2;
      $intralot->Chip = $request->Chip;
      $intralot->save();
      return response()->json(['message' => 'Intralot Guardada!','code'=>200]);
    }
    return response()->json(['message'=> 'Intralot ya existe!','code'=> 403]);
  }
  public function addDataLoteria(Request $request){
    $code = $request->Codigo_de_servicio;
    if(DataLoteria::where('Codigo_de_servicio', $code)->doesntExist()){
      $dataLoteria = new DataLoteria();
      $dataLoteria->Codigo_de_servicio = $request->Codigo_de_servicio;
      $dataLoteria->RED = $request->RED;
      $dataLoteria->GW = $request->GW;
      $dataLoteria->RANGO_DE_IP_DHCP = $request->RANGO_DE_IP_DHCP;
      $dataLoteria->RANGO_DE_IP_DHCP_2 = $request->RANGO_DE_IP_DHCP_2;
      $dataLoteria->BROADCAST = $request->BROADCAST;
      $dataLoteria->Cod_Local = $request->Cod_Local;
      $dataLoteria->Solot = $request->Solot;
      $dataLoteria->Agente = $request->Agente;
      $dataLoteria->Direccion = $request->Direccion;
      $dataLoteria->Contacto = $request->Contacto;
      $dataLoteria->Horario_de_atencion = $request->Horario_de_atencion;
      $dataLoteria->Comuna = $request->Comuna;
      $dataLoteria->Region = $request->Region;
      $dataLoteria->Terminales = $request->Terminales;
      $dataLoteria->Fecha_Implementacion = $request->Fecha_Implementacion;
      $dataLoteria->Numero_de_Serie_40F_3G_4G = $request->Numero_de_Serie_40F_3G_4G;
      $dataLoteria->Numero_de_serie_211E_extender = $request->Numero_de_serie_211E_extender;
      $dataLoteria->Numero_de_Serie_SIM_CLARO = $request->Numero_de_Serie_SIM_CLARO;
      $dataLoteria->Tunnel_1_Datos = $request->Tunnel_1_Datos;
      $dataLoteria->Tunnel_2_Datos = $request->Tunnel_2_Datos;
      $dataLoteria->Tunnel_3_Datos = $request->Tunnel_3_Datos;
      $dataLoteria->Tunnel_1_Internet = $request->Tunnel_1_Internet;
      $dataLoteria->Tunnel_2_Internet = $request->Tunnel_2_Internet;
      $dataLoteria->Tunnel_3_Internet = $request->Tunnel_3_Internet;
      $dataLoteria->Numero_de_Serie_SIM_Internet_ISP_X = $request->Numero_de_Serie_SIM_Internet_ISP_X;
      $dataLoteria->IP_Loopback_32 = $request->IP_Loopback_32;
      $dataLoteria->save();
      return response()->json(['message' => 'DataLoteria Guardada!','code'=>200]);
    }
    return response()->json(['message'=> 'DataLoteria ya existe!','code'=> 403]);
  }
  public function addDatoRuta(Request $request){
    $code = $request->NUMERO_DE_SERVICIO;
    if (DatoRuta::where('NUMERO_DE_SERVICIO', $code)->doesntExist()){
      $datoRuta = new DatoRuta();
      $datoRuta->NUMERO_DE_SERVICIO = $request->NUMERO_DE_SERVICIO;
      $datoRuta->CLIENTE = $request->CLIENTE;
      $datoRuta->TIPO_ENLACE = $request->TIPO_ENLACE;
      $datoRuta->LADO_A = $request->LADO_A;
      $datoRuta->NODO = $request->NODO;
      $datoRuta->RUTA = $request->RUTA;
      $datoRuta->RACK_A = $request->RACK_A;
      $datoRuta->ODF_A = $request->ODF_A;
      $datoRuta->POS_A = $request->POS_A;
      $datoRuta->LADO_B = $request->LADO_B;
      $datoRuta->SALA = $request->SALA;
      $datoRuta->RACK_B = $request->RACK_B;
      $datoRuta->ODF_B = $request->ODF_B;
      $datoRuta->POS_B = $request->POS_B;
      $datoRuta->NIVELES_HISTORICOS = $request->NIVELES_HISTORICOS;
      $datoRuta->Seguimiento_y_contactos = $request->Seguimiento_y_contactos;
      $datoRuta->save();
      return response()->json(['message'=>'DatoRuta Guardado!','code'=>200]);
    }
    return response()->json(['message'=> 'DatoRuta ya existe!','code'=> 403]);
  }
  public function addData(Request $request){
    $code = $request->Equipo;
    if(Data::where('Equipo', $code)->doesntExist()){
      $data = new Data();
      $data->Equipo = $request->Equipo;
      $data->Comuna = $request->Comuna;
      $data->Sitio = $request->Sitio;
      $data->Proveedor = $request->Proveedor;
      $data->Familia = $request->Familia;
      $data->Plataforma = $request->Plataforma;
      $data->IP = $request->IP;
      $data->Descriptor = $request->Descriptor;
      $data->Contraseña = $request->Contraseña;
      $data->N_Nodo = $request->N_Nodo;
      $data->save();
      return response()->json(['message'=>'Data Guardado!','code'=>200]);
    }
    return response()->json(['message'=> 'Data ya existe!','code'=> 403]);
  }
}
