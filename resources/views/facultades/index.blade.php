@extends('layouts/app')

@section('content')
    <aside class="toolbar">
        <h3 class="toolbar-title">Catalogo de Facultades</h3>
        <div class="toolbar-content">
            <a href="{{ route('facultades.crear') }}" role="button" class="btn btn-outline-success">
                Crear Facultad de Estudio
            </a>
        </div>
    </aside>
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facultades as $facultad)
                    <tr>
                        <th scope="row">{{$facultad->id}}</th>
                        <td>{{$facultad->nombre}}</td>
                        <td>{{$facultad->descripcion}}</td>
                        <td>
                            <a title="Editar Información" href="{{ route('facultades.editar', $facultad->id) }}" class="btn btn-sm btn-outline-info">
                                <span class="oi oi-pencil"></span>
                            </a>

                            <a title="Eliminar Facultad" href="{{ route('facultades.eliminar', $facultad->id) }}" class="btn btn-sm btn-outline-danger">
                                <span class="oi oi-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection