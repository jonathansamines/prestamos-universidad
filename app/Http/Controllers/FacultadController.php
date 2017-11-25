<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function index() {
        return view('facultades/index');
    }

    public function nuevo() {
        return view('facultades/nuevo');
    }

    public function editar($id) {
        // TODO: Leer datos cañonera y enviar al context
        return view('facultades/editar');
    }

    public function eliminar($id) {
        // TODO Eliminar cañonera y redirigir
    }
}
