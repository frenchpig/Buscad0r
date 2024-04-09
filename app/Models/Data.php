<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $fillable = [
        'Equipo',
        'Comuna',
        'Sitio',
        'Proveedor',
        'Familia',
        'Plataforma',
        'IP',
        'Descriptor',
        'Contraseña',
        'N_Nodo',
    ];
}
