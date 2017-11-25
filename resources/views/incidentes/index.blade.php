@extends('layouts/app')

@section('content')
    <aside class="toolbar">
        <h3 class="toolbar-title">Registro de Incidentes</h3>
        <div class="toolbar-content">
            <a href="{{ route('incidentes.crear') }}" role="button" class="btn btn-outline-success">
                Crear Incidente
            </a>
        </div>
    </aside>
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Responsable</th>
                    <th scope="col">Cañonera</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incidentes as $incidente)
                    <tr>
                        <th scope="row">{{$incidente->id}}</th>
                        <td>{{$incidente->titulo}}</td>
                        <td>{{$incidente->descripcion}}</td>
                        <td>{{$incidente->tiene_cable_poder}}</td>
                        <td>{{$incidente->tiene_cable_video}}</td>
                        <td>{{$incidente->tiene_estuche}}</td>
                        <td>{{$incidente->responsable->nombre}}</td>
                        <td>{{$incidente->cañonera->descripcion()}}</td>
                        <td>{{$incidente->created_at->format('Y-M-D H:i:s')}}</td>

                        <td>
                            <a title="Editar Información" href="{{ route('incidentes.editar', $incidente->id) }}" class="btn btn-sm btn-outline-info">
                                <span class="oi oi-pencil"></span>
                            </a>

                            <a title="Eliminar Incidente" href="{{ route('incidentes.eliminar', $incidente->id) }}" class="btn btn-sm btn-outline-danger">
                                <span class="oi oi-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection