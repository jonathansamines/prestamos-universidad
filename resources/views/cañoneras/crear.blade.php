@extends('layouts/app')

@section('content')
    <form action="{{ route('cañoneras.action.crear') }}" method="post">
        <fieldset>
            <h3>Crear cañonera</h3>
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" name="marca" id="marca" placeholder="Ingrese el nombre de la marca" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Ingrese el nombre del modelo" required>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" name="color" id="color" placeholder="Ingrese el color de la cañonera" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Crear Cañonera</button>
            </div>
        </fieldset>
    </form>
@endsection