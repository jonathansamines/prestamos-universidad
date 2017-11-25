<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidente;
use App\Persona;
use App\Cañonera;

class IncidenteController extends Controller
{
    public function index() {
        $incidentes = Incidente::all();

        return view('incidentes/index', compact('incidentes'));
    }

    public function crear() {
        $personas = Persona::all();
        $cañoneras = Cañonera::all();

        return view('incidentes/crear', compact('personas', 'cañoneras'));
    }

    public function crearIncidente() {
        Incidente::create([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'id_responsable' => request('id_responsable'),
            'id_cañonera' => request('id_cañonera')
        ]);

        return redirect()->route('incidentes.index');
    }

    public function editar($id) {
        $incidente = Incidente::find($id);
        $personas = Persona::all();
        $cañoneras = Cañonera::all();

        return view('incidentes/editar', compact('incidente', 'cañoneras', 'personas'));
    }

    public function editarIncidente($id) {
        $incidente = Incidente::find($id);
        $incidente->titulo = request('titulo');
        $incidente->descripcion = request('descripcion');
        $incidente->id_responsable = request('id_responsable');
        $incidente->id_cañonera = request('id_cañonera');
        $incidente->save();

        return redirect()->route('incidentes.index');
    }

    public function eliminar($id) {
        Incidente::destroy($id);

        return redirect()->route('incidentes.index');
    }
}
