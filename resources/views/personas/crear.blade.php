@extends('layouts/app')

@section('content')
    <form action="{{ route('personas.action.crear') }}" method="POST">
        {{csrf_field()}}
        <fieldset>
            <h3>Crear persona</h3>
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre completo" required>
            </div>
            <div class="form-group">
                <label for="dpi">DPI</label>
                <input type="text" class="form-control" name="dpi" id="dpi" placeholder="Ingrese el número de DPI" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" class="form-control" required>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Crear Persona</button>
            </div>
        </fieldset>
    </form>
@endsection