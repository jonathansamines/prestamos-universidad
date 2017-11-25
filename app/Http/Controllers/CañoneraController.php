<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CañoneraController extends Controller
{
    public function index() {
        return view('cañoneras/index');
    }

    public function nuevo() {
        return view('cañoneras/nuevo');
    }

    public function editar($id) {
        // TODO: Leer datos cañonera y enviar al context
        return view('cañoneras/editar');
    }

    public function eliminar($id) {
        // TODO Eliminar cañonera y redirigir
    }
}
