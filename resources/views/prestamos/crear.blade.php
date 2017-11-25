@extends('layouts/app')

@section('content')
    <form action="{{ route('prestamos.action.crear') }}" method="POST">
        {{csrf_field()}}
        <fieldset>
            <h3>Ingresar Prestamo</h3>
            <div class="form-group">
                <label for="hora_entrega">Hora de entrega</label>
                <input type="time" class="form-control" name="hora_entrega" id="hora_entrega" placeholder="Hora de entrega" required value="{{now()->format('H:i:s')}}">
            </div>
            <div class="form-group">
                <label for="hora_devolucion">Hora de devolucion</label>
                <input type="time" class="form-control" name="hora_devolucion" id="hora_devolucion" placeholder="Hora de devolución" required value="{{now()->format('H:i:s')}}">
            </div>
            <div class="form-group">
                <label for="facultad">Facultad</label>
                <select name="id_facultad" id="facultad" class="form-control" required>
                    @foreach($facultades as $facultad)
                        <option value="{{$facultad->id}}">{{$facultad->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable</label>
                <select name="id_responsable" id="responsable" class="form-control" required>
                    @foreach($personas as $persona)
                        <option value="{{$persona->id}}">{{$persona->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cañonera">Cañonera</label>
                <select name="id_cañonera" id="cañonera" class="form-control" required>
                    @foreach($cañoneras as $cañonera)
                        <option value="{{$cañonera->id}}">{{$cañonera->descripcion()}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="observaciones">Observaciones</label>
                <textarea class="form-control" name="observaciones" id="observaciones" placeholder="Ingrese observaciones respecto al prestamo" required></textarea>
            </div>
            <div class="form-group">
                <label for="tiene_cable_poder">Tiene Cable de Poder</label>
                <input type="checkbox" class="form-control" name="tiene_cable_poder" id="tiene_cable_poder">
            </div>
            <div class="form-group">
                <label for="tiene_cable_video">Tiene Cable de Video</label>
                <input type="checkbox" class="form-control" name="tiene_cable_video" id="tiene_cable_video">
            </div>
            <div class="form-group">
                <label for="tiene_estuche">Tiene Estuche</label>
                <input type="checkbox" class="form-control" name="tiene_estuche" id="tiene_estuche">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Crear Prestamo</button>
            </div>
        </fieldset>
    </form>
@endsection