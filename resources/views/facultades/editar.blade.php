@extends('layouts/app')

@section('content')
    <form action="{{ route('facultades.action.editar', $facultad->id) }}" method="POST">
        {{csrf_field()}}
        <fieldset>
            <h3>Actualizar Información de Facultad de Estudio</h3>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre de la facultad" required value="{{$facultad->nombre}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese una breve descripcion de la facultad" required>{{$facultad->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Facultad</button>
            </div>
        </fieldset>
    </form>
@endsection