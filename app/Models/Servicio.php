<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    //Tabla utilizada por este modelo
    protected $table = 'servicios';

    protected $fillable = [
        'condicion',
        'ip_loop',
        'cliente',
        'cod',
        'comuna',
        'direccion',
        'lan',
        'protocolo',
        'servicio',
        'vrf',
        'wan',
        'nombre_equipo',
        'ip_equipo',
        'descripcion',
        'puerta',
        'vlan',
        'posiciones'
    ];
}
