@extends('layouts/app')

@section('content')
    <aside class="toolbar">
        <h3 class="toolbar-title">Catalogo de Cañoneras</h3>
        <div class="toolbar-content">
            <a href="{{ route('cañoneras.crear') }}" role="button" class="btn btn-outline-success">
                Crear Cañonera
            </a>
        </div>
    </aside>
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Color</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cañoneras as $cañonera)
                    <tr>
                        <th scope="row">{{$cañonera->id}}</th>
                        <td>{{$cañonera->marca}}</td>
                        <td>{{$cañonera->modelo}}</td>
                        <td>{{$cañonera->color}}</td>
                        <td>
                            <a title="Editar Información" href="{{ route('cañoneras.editar', $cañonera->id) }}" class="btn btn-sm btn-outline-info">
                                <span class="oi oi-pencil"></span>
                            </a>

                            <a title="Eliminar Cañonera" href="{{ route('cañoneras.eliminar', $cañonera->id) }}" class="btn btn-sm btn-outline-danger">
                                <span class="oi oi-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection