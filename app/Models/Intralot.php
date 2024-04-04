<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intralot extends Model
{
    use HasFactory;
    protected $table = 'intralot';
    protected $fillable = [
        'LOTOS_INTRALOT',
        'DIRECCION',
        'COD_DE_SERVICIO',
        'CIUDAD',
        'RED_LAN',
        'MASCARA',
        'IP_LOOPBACK',
        'CTO_AGENCIA',
        'TLF_AGENCIA',
        'EQUIPO',
        'Equipo2',
        'Chip',
    ];
}
