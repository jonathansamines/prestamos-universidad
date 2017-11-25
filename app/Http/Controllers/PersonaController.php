<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index() {
        return view('personas/index');
    }

    public function nuevo() {
        return view('personas/nuevo');
    }

    public function editar($id) {
        // TODO: Leer datos cañonera y enviar al context
        return view('personas/editar');
    }

    public function eliminar($id) {
        // TODO Eliminar cañonera y redirigir
    }
}
