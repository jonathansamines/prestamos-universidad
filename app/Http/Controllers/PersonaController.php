<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index() {
        return view('personas/index');
    }

    public function crear() {
        return view('personas/crear');
    }

    public function editar($id) {
        // TODO: Leer datos cañonera y enviar al context
        return view('personas/editar');
    }

    public function eliminar($id) {
        // TODO Eliminar cañonera y redirigir
    }
}
