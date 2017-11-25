<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use App\Persona;
use App\Facultad;
use App\Cañonera;

class PrestamoController extends Controller
{
    public function index() {
        $prestamos = Prestamo::all();

        return view('prestamos/index', compact('prestamos'));
    }

    public function crear() {
        $personas = Persona::all();
        $cañoneras = Cañonera::all();
        $facultades = Facultad::all();

        return view(
            'prestamos/crear',
            compact('personas', 'cañoneras', 'facultades')
        );
    }

    public function crearPrestamo() {
        Prestamo::create([
            'hora_entrega' => request('hora_entrega'),
            'hora_devolucion' => request('hora_devolucion'),
            'id_facultad' => request('id_facultad'),
            'id_cañonera' => request('id_cañonera'),
            'id_responsable' => request('id_responsable'),
            'observaciones' => request('observaciones')
        ]);

        return redirect()->route('prestamos.index');
    }

    public function editar($id) {
        $personas = Persona::all();
        $cañoneras = Cañonera::all();
        $facultades = Facultad::all();
        $prestamo = Prestamo::find($id);

        return view(
            'prestamos/editar',
            compact('personas', 'cañoneras', 'facultades', 'prestamo')
        );
    }

    public function editarPrestamo($id) {
        $prestamo = Prestamo::find($id);

        $prestamo->hora_entrega = request('hora_entrega');
        $prestamo->hora_devolucion = request('hora_devolucion');
        $prestamo->id_facultad = request('id_facultad');
        $prestamo->id_responsable = request('id_responsable');
        $prestamo->id_cañonera = request('id_cañonera');
        $prestamo->observaciones = request('observaciones');

        $prestamo->save();

        return redirect()->route('prestamos.index');
    }

    public function eliminar($id) {
        Prestamo::destroy($id);

        return redirect()->route('prestamos.index');
    }
}
