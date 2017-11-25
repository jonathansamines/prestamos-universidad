<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'prestamos';
    protected $fillable = [
        'hora_entrega',
        'hora_devolucion',
        'observaciones',
        'id_facultad',
        'id_responsable',
        'id_cañonera',
    ];
}
