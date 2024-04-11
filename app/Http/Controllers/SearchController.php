<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Servicio;

class SearchController extends Controller
{
    public function searchService (Request $request) {
        $search = $request->get("codigo");
        return Servicio::where('cod',$search)->first();
    }
}
