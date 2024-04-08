<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoRuta extends Model
{
    use HasFactory;
    protected $table = 'dato_rutas';

    protected $fillable = [
        'CLIENTE',
        'NUMERO_DE_SERVICIO',
        'TIPO_ENLACE',
        'LADO_A',
        'NODO',
        'RUTA',
        'RACK_A',
        'ODF_A',
        'POS_A',
        'LADO_B',
        'SALA',
        'RACK_B',
        'ODF_B',
        'POS_B',
        'NIVELES_HISTORICOS',
        'Seguimiento_y_contactos',
    ];
}
