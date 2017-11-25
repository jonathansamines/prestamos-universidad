<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    protected $table = 'incidentes';
    protected $fillable = ['titulo', 'descripcion', 'id_responsable', 'id_cañonera'];

    public function responsable() {
        return $this->hasOne('App\Persona', 'id', 'id_responsable');
    }

    public function cañonera() {
        return $this->hasOne('App\Cañonera', 'id', 'id_cañonera');
    }
}
