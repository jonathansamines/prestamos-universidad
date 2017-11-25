<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index() {
        return view('prestamos/index');
    }

    public function crear() {
        // TODO: Leer facultades
        // leer personas
        // leer cañoneras
        return view('prestamos/crear');
    }

    public function editar($id) {
        // TODO: Leer datos de la bd y pasar al contexto
        return view('prestamos/editar');
    }

    public function eliminar($id) {
        // TODO: Eliminar de la bd y realizar redireccion a index
    }
}
