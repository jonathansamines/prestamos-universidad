@extends('layouts/app')

@section('content')
    <form action="{{ route('cañoneras.action.editar', $cañonera->id) }}" method="post">
        <fieldset>
            <h3>Actualizar Información Cañonera</h3>
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" name="marca" id="marca" placeholder="Ingrese el nombre de la marca" required value="{{$cañonera->marca}}">
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Ingrese el nombre del modelo" required value="{{$cañonera->modelo}}">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" name="color" id="color" placeholder="Ingrese el color de la cañonera" required value="{{$cañonera->color}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Cañonera</button>
            </div>
        </fieldset>
    </form>
@endsection