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
        'tiene_cable_poder',
        'tiene_cable_video',
        'tiene_estuche',
        'id_facultad',
        'id_responsable',
        'id_cañonera',
    ];

    public function facultad() {
        return $this->hasOne('App\Facultad', 'id', 'id_facultad');
    }

    public function responsable() {
        return $this->hasOne('App\Persona', 'id', 'id_responsable');
    }

    public function cañonera() {
        return $this->hasOne('App\Cañonera', 'id', 'id_cañonera');
    }
}
