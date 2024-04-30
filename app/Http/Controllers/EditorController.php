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
    public function editDataLoteria(Request $request){
      $code = $request->Codigo_de_servicio;
      $dataLoteriaONDB = DataLoteria::where('Codigo_de_servicio', $code)->first();
      if($dataLoteriaONDB){
        $dataLoteriaONDB->RED = $request->RED;
        $dataLoteriaONDB->GW = $request->GW;
        $dataLoteriaONDB->RANGO_DE_IP_DHCP = $request->RANGO_DE_IP_DHCP;
        $dataLoteriaONDB->RANGO_DE_IP_DHCP_2 = $request->RANGO_DE_IP_DHCP_2;
        $dataLoteriaONDB->BROADCAST = $request->BROADCAST;
        $dataLoteriaONDB->Cod_Local = $request->Cod_Local;
        $dataLoteriaONDB->Solot = $request->Solot;
        $dataLoteriaONDB->Agente = $request->Agente;
        $dataLoteriaONDB->Direccion = $request->Direccion;
        $dataLoteriaONDB->Contacto = $request->Contacto;
        $dataLoteriaONDB->Horario_de_atencion = $request->Horario_de_atencion;
        $dataLoteriaONDB->Comuna = $request->Comuna;
        $dataLoteriaONDB->Region = $request->Region;
        $dataLoteriaONDB->Terminales = $request->Terminales;
        $dataLoteriaONDB->Fecha_Implementacion = $request->Fecha_Implementacion;
        $dataLoteriaONDB->Numero_de_Serie_40F_3G_4G = $request->Numero_de_Serie_40F_3G_4G;
        $dataLoteriaONDB->Numero_de_serie_211E_extender = $request->Numero_de_serie_211E_extender;
        $dataLoteriaONDB->Numero_de_Serie_SIM_CLARO = $request->Numero_de_Serie_SIM_CLARO;
        $dataLoteriaONDB->Tunnel_1_Datos = $request->Tunnel_1_Datos;
        $dataLoteriaONDB->Tunnel_2_Datos = $request->Tunnel_2_Datos;
        $dataLoteriaONDB->Tunnel_3_Datos = $request->Tunnel_3_Datos;
        $dataLoteriaONDB->Tunnel_1_Internet = $request->Tunnel_1_Internet;
        $dataLoteriaONDB->Tunnel_2_Internet = $request->Tunnel_2_Internet;
        $dataLoteriaONDB->Tunnel_3_Internet = $request->Tunnel_3_Internet;
        $dataLoteriaONDB->Numero_de_Serie_SIM_Internet_ISP_X = $request->Numero_de_Serie_SIM_Internet_ISP_X;
        $dataLoteriaONDB->IP_Loopback_32 = $request->IP_Loopback_32;
        $dataLoteriaONDB->save();
        return response()->json(['message' => 'DataLoteria Guardada!','code'=>200]);
      }
      return response()->json(['message'=> 'DataLoteria no encontrada','code'=> 404]);
    }
    public function editDatoRutas(Request $request){
      $code = $request->NUMERO_DE_SERVICIO;
      $datoRutasOnDB = DatoRuta::where('NUMERO_DE_SERVICIO', $code)->first();
      if ($datoRutasOnDB){
        $datoRutasOnDB->CLIENTE = $request->CLIENTE;
        $datoRutasOnDB->TIPO_ENLACE = $request->TIPO_ENLACE;
        $datoRutasOnDB->LADO_A = $request->LADO_A;
        $datoRutasOnDB->NODO = $request->NODO;
        $datoRutasOnDB->RUTA = $request->RUTA;
        $datoRutasOnDB->RACK_A = $request->RACK_A;
        $datoRutasOnDB->ODF_A = $request->ODF_A;
        $datoRutasOnDB->POS_A = $request->POS_A;
        $datoRutasOnDB->LADO_B = $request->LADO_B;
        $datoRutasOnDB->SALA = $request->SALA;
        $datoRutasOnDB->RACK_B = $request->RACK_B;
        $datoRutasOnDB->ODF_B = $request->ODF_B;
        $datoRutasOnDB->POS_B = $request->POS_B;
        $datoRutasOnDB->NIVELES_HISTORICOS = $request->NIVELES_HISTORICOS;
        $datoRutasOnDB->Seguimiento_y_contactos = $request->Seguimiento_y_contactos;
        $datoRutasOnDB->save();
        return response()->json(['message'=>'DatoRuta Guardado!','code'=>200]);
      }
      return response()->json(['message' =>'DatoRuta no encontrado','code'=> 404]);
    }
    public function editData(Request $request){
      $code = $request->Equipo;
      $dataOnDB = Data::where('Equipo', $code)->first();
      if($dataOnDB){
        $dataOnDB->Comuna = $request->Comuna;
        $dataOnDB->Sitio = $request->Sitio;
        $dataOnDB->Proveedor = $request->Proveedor;
        $dataOnDB->Familia = $request->Familia;
        $dataOnDB->Plataforma = $request->Plataforma;
        $dataOnDB->IP = $request->IP;
        $dataOnDB->Descriptor = $request->Descriptor;
        $dataOnDB->Contraseña = $request->Contraseña;
        $dataOnDB->N_Nodo = $request->N_Nodo;
        $dataOnDB->save();
        return response()->json(['message'=>'Data Guardado!','code'=>200]);
      }
      return response()->json(['message'=> 'Data no encontrada','code'=> 404]);

    }
}
