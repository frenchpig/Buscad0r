<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Intralot;
use App\Models\DataLoteria;
use App\Models\DatoRuta;
use App\Models\Data;

class ExportController extends Controller
{
    public function getFullDatabase()
    {
        return response()->json([
            'servicios'   => Servicio::all(),
            'intralot'    => Intralot::all(),
            'dataloteria' => DataLoteria::all(),
            'datorutas'   => DatoRuta::all(),
            'data'        => Data::all(),
        ]);
    }
}
