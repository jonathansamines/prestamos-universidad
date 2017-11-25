<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facultad;

class FacultadController extends Controller
{
    public function index() {
        $facultades = Facultad::all();

        return view('facultades/index', compact('facultades'));
    }

    public function crear() {
        return view('facultades/crear');
    }

    public function crearFacultad() {
        Facultad::create([
            'nombre' => request('nombre'),
            'descripcion' => request('descripcion')
        ]);

        return redirect()->route('facultades.index');
    }

    public function editar($id) {
        $facultad = Facultad::find($id);

        return view('facultades/editar', compact('facultad'));
    }

    public function editarFacultad($id) {
        $facultad = Facultad::find($id);
        $facultad->nombre = request('nombre');
        $facultad->descripcion = request('descripcion');
        $facultad->save();

        return redirect()->route('facultades.index');
    }

    public function eliminar($id) {
        Facultad::destroy($id);

        return redirect()->route('facultades.index');
    }
}
