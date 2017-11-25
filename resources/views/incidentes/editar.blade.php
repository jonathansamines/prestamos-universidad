@extends('layouts/app')

@section('content')
    <form action="{{ route('incidentes.action.editar', $incidente->id) }}" method="POST">
        {{csrf_field()}}
        <fieldset>
            <h3>Actualizar Información Incidente</h3>
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese el resumen del incidente" required value="{{$incidente->titulo}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion del incidente" required>{{$incidente->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable</label>
                <select name="id_responsable" id="responsable" class="form-control" required>
                    @foreach($personas as $persona)
                        <option value="{{$persona->id}}" {{$incidente->id_responsable == $persona->id ? 'selected' : ''}}>{{$persona->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cañonera">Cañonera</label>
                <select name="id_cañonera" id="cañonera" class="form-control" required>
                    @foreach($cañoneras as $cañonera)
                        <option value="{{$cañonera->id}}" {{$incidente->id_cañonera == $cañonera->id ? 'selected' : ''}}>{{$cañonera->descripcion()}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Incidente</button>
            </div>
        </fieldset>
    </form>
@endsection