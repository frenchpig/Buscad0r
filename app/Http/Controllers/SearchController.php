<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Servicio;
use App\Models\Intralot;
use App\Models\DataLoteria;

class SearchController extends Controller
{
    public function searchService (Request $request) {
        $search = $request->get("codigo");
        return Servicio::where('cod',$search)->first();
    }
    public function searchIntralot (Request $request){
        $search = $request->get('codigo');
        return Intralot::where('COD_DE_SERVICIO',$search)->first();
    }
    public function searchDataLoteria (Request $request){
        $search = $request->get('codigo');
        return DataLoteria::where('Codigo_de_servicio',$search)->first();
    }
}
