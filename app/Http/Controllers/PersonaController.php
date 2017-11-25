<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    public function index() {
        $personas = Persona::all();

        return view('personas/index', compact('personas'));
    }

    public function crear() {
        return view('personas/crear');
    }

    public function crearPersona() {
        Persona::create([
            'nombre' => request('nombre'),
            'dpi' => request('dpi'),
            'sexo' => request('sexo')
        ]);

        return redirect()->route('personas.index');
    }

    public function editar($id) {
        $persona = Persona::find($id);

        return view('personas/editar', compact('persona'));
    }

    public function editarPersona($id) {
        $persona = Persona::find($id);

        $persona->nombre = request('nombre');
        $persona->dpi = request('dpi');
        $persona->sexo = request('sexo');
        $persona->save();

        return redirect()->route('personas.index');
    }

    public function eliminar($id) {
        Persona::destroy($id);

        return redirect()->route('personas.index');
    }
}
