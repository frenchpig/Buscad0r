<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function searchService (Request $request) {
        $search = $request->get("codigo");
        Log::info($search);
    }
}
