@extends('layouts/app')

@section('content')
    <form action="{{ route('personas.action.editar', $persona->id) }}" method="POST">
        {{csrf_field()}}
        <fieldset>
            <h3>Actualizar información Persona</h3>
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre completo" required value="{{$persona->nombre}}">
            </div>
            <div class="form-group">
                <label for="dpi">DPI</label>
                <input type="text" class="form-control" name="dpi" id="dpi" placeholder="Ingrese el número de DPI" required value="{{$persona->dpi}}">
            </div>
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" class="form-control" required value="{{$persona->sexo}}">
                    <option {{$persona->sexo == 'M' ? 'selected' : ''}} value="M">Masculino</option>
                    <option {{$persona->sexo == 'F' ? 'selected' : ''}} value="F">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Persona</button>
            </div>
        </fieldset>
    </form>
@endsection