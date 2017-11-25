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

    public function crearCañonera() {
        Cañonera::create([
            'modelo' => request('modelo'),
            'marca' => request('marca'),
            'color' => request('color')
        ]);

        return redirect()->route('cañoneras.index');
    }

    public function editar($id) {
        $cañonera = Cañonera::find($id);

        return view('cañoneras/editar', compact('cañonera'));
    }

    public function editarCañonera($id) {
        $cañonera = Cañonera::find($id);

        $cañonera->modelo = request('modelo');
        $cañonera->marca = request('marca');
        $cañonera->color = request('color');
        $cañonera->save();

        return redirect()->route('cañoneras.index');
    }

    public function eliminar($id) {
        $cañonera = Cañonera::destroy($id);

        return redirect()->route('cañoneras.index');
    }
}
