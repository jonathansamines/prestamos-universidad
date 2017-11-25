@extends('layouts/app')

@section('content')
    <aside class="toolbar">
        <h3 class="toolbar-title">Catalogo de Personas</h3>
        <div class="toolbar-content">
            <a href="{{ route('personas.crear') }}" role="button" class="btn btn-outline-success">
                Crear Persona
            </a>
        </div>
    </aside>
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">DPI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <th scope="row">{{$persona->id}}</th>
                        <td>{{$persona->dpi}}</td>
                        <td>{{$persona->nombre}}</td>
                        <td>{{$persona->sexo}}</td>
                        <td>
                            <a title="Editar Información" href="{{ route('personas.editar', $persona->id) }}" class="btn btn-sm btn-outline-info">
                                <span class="oi oi-pencil"></span>
                            </a>

                            <a title="Eliminar Persona" href="{{ route('personas.eliminar', $persona->id) }}" class="btn btn-sm btn-outline-danger">
                                <span class="oi oi-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection