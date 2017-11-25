<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cañonera extends Model
{
    protected $table = 'cañoneras';
    protected $fillable = ['marca', 'modelo', 'color'];

    public function descripcion() {
        return $this->marca.' '.$this->modelo.' '.$this->color;
    }
}
