@extends('layouts/app')

@section('content')
    <aside class="toolbar">
        <h3 class="toolbar-title">Prestamo de Cañoneras</h3>
        <div class="toolbar-content">
            <a href="{{ route('prestamos.crear') }}" role="button" class="btn btn-outline-success">Nuevo Préstamo</a>
        </div>
    </aside>
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora de Entrega</th>
                    <th scope="col">Hora de Devolución</th>
                    <th scope="col">Facultad</th>
                    <th scope="col">Responsable</th>
                    <th scope="col">Cañonera asignada</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestamos as $prestamo)
                    <tr>
                        <th scope="row">{{$prestamo->id}}</th>
                        <td>{{$prestamo->created_at->format('Y-M-D H:i:s')}}</td>
                        <td>{{$prestamo->hora_entrega}}</td>
                        <td>{{$prestamo->hora_devolucion}}</td>
                        <td>{{$prestamo->facultad->nombre}}</td>
                        <td>{{$prestamo->responsable->nombre}}</td>
                        <td>{{$prestamo->cañonera->descripcion()}}</td>
                        <td>{{$prestamo->observaciones}}</td>
                        <td>
                            <a title="Editar Información" href="{{ route('prestamos.editar', $prestamo->id) }}" class="btn btn-sm btn-outline-info">
                                <span class="oi oi-pencil"></span>
                            </a>

                            <a title="Eliminar Persona" href="{{ route('prestamos.eliminar', $prestamo->id) }}" class="btn btn-sm btn-outline-danger">
                                <span class="oi oi-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection