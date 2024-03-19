<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function insertData(Request $request)
    {
        // Acceder a los datos recibidos
        $data = $request->all();
        Log::info(gettype($data));
        // Hacer lo que necesites con los datos...
        foreach ($data as $row) {
            Log::info('=================================================SEPARADORSEPARADORSEPARADOR=================================================');
            Log::info($row);
            Log::info('=================================================SEPARADORSEPARADORSEPARADOR=================================================');
            //Servicio::create($rowData);
        }
        // Por ejemplo, puedes devolver una respuesta indicando que los datos fueron recibidos con éxito
        return response()->json(['message' => 'Datos recibidos correctamente']);
    }


        //Log::info($data);
        // // Mostrar el contenido del array en PHP
        // echo "<pre>";
        // print_r($data); // Opcionalmente, puedes usar var_dump($data);
        // echo "</pre>";

        // foreach ($data as $row) {
        //     Log::info('=================================================SEPARADORSEPARADORSEPARADOR=================================================');
        //     Log::info($row);
        //     Log::info('=================================================SEPARADORSEPARADORSEPARADOR=================================================');
        //     //Servicio::create($rowData);
        // }
}
