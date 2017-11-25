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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>
                        <a href="{{ route('prestamos.editar', 1) }}" class="btn btn-sm btn-outline-info">
                            <span class="oi oi-pencil"></span>
                        </a>
                        <a href="{{ route('prestamos.eliminar', 1) }}" class="btn btn-sm btn-outline-danger">
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
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection