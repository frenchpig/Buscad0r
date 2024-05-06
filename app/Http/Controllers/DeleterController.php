<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Intralot;
use App\Models\DataLoteria;
use App\Models\DatoRuta;
use App\Models\Data;
use Illuminate\Support\Facades\Log;
//deleteData

class DeleterController extends Controller
{
  public function deleteService (Request $request){
    $code=$request->code;
    $service = Servicio::where('cod',$code)->first();
    if($service){
      $service->delete();
      return response()->json(['message' => 'Servicio eliminado', 'code' => 200]);
    }
    return response()->json(['message'=>'Servicio no encontrado','code'=>404]);
  }
  public function deleteIntralot (Request $request){
    $code=$request->code;
    $intralot = Intralot::where('COD_DE_SERVICIO',$code)->first();
    if($intralot){
      $intralot->delete();
      return response()->json(['message' => 'Intralot eliminada', 'code' => 200]);
    }
    return response()->json(['message'=>'Intralot no encontrada','code'=>404]);
  }
  public function deleteDataLoteria (Request $request){
    $code=$request->code;
    $dataloteria = DataLoteria::where('Codigo_de_servicio',$code)->first();
    if($dataloteria){
      $dataloteria->delete();
      return response()->json(['message' => 'Data Loteria eliminada', 'code' => 200]);
    }
    return response()->json(['message'=>'Data Loteria no encontrada','code'=>404]);
  }
  public function deleteDatoRuta (Request $request){
    $code=$request->code;
    $datoruta = DatoRuta::where('NUMERO_DE_SERVICIO',$code)->first();
    if($datoruta){
      $datoruta->delete();
      return response()->json(['message' => 'Dato Ruta eliminado', 'code' => 200]);
    }
    return response()->json(['message'=>'Dato Ruta no encontrado','code'=>404]);
  }
  public function deleteData (Request $request){
    $code=$request->code;
    $data = Data::where('Equipo',$code)->first();
    if($data){
      $data->delete();
      return response()->json(['message' => 'Data eliminada', 'code' => 200]);
    }
    return response()->json(['message'=>'Data no encontrada','code'=>404]);
  }
}
