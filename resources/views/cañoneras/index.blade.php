@extends('layouts/app')

@section('content')
    <aside class="toolbar">
        <h3 class="toolbar-title">Catalogo de Cañoneras</h3>
        <div class="toolbar-content">
            <a href="{{ url('cañoneras/nuevo') }}" role="button" class="btn btn-outline-success">Nueva Cañonera</a>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a title="Editar Información" href="{{ url('cañoneras/editar') }}" class="btn btn-sm btn-outline-info">
                            <span class="oi oi-pencil"></span>
                        </a>
                        <a title="Eliminar Cañonera" href="{{ url('cañoneras/eliminar') }}" class="btn btn-sm btn-outline-danger">
                            <span class="oi oi-trash"></span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection