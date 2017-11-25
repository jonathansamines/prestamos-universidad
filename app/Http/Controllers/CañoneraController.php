<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cañonera;

class CañoneraController extends Controller
{
    public function index() {
        $cañoneras = Cañonera::all();
        return view('cañoneras/index', compact('cañoneras'));
    }

    public function crear() {
        return view('cañoneras/crear');
    }

    public function crearCañonera($cañonera) {
        Cañonera::new($cañonera);

        return redirect('cañoneras/index');
    }

    public function editar($id) {
        $cañonera = Cañonera::find($id);

        return view('cañoneras/editar', compact('cañonera'));
    }

    public function eliminar($id) {
        Cañonera::delete($id);

        return redirect('cañoneras/index');
    }
}
