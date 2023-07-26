@extends('layout')

@section('contenido')

<div class="card">
    <div class="card-header">
        Agregar Vehiculo

    </div>
<div class="card-body">
    <form action="{{url('vehiculos')}}" method="POST">
        @csrf 
    <label for="placaa" class="form-label">placaa</label>
    <input type="text" id="placaa" name="placaa" class="form-control" required>
    
    <label for="modelo" class="form-label">modelo</label>
    <input type="text" name="modelo" id="modelo" class="form-control" required>

    <label for="tipo_auto" class="form-label">tipo_auto</label>
    <input type="text" name="tipo_auto" id="tipo_auto" class="form-control" required>

    <label for="capacidad" class="form-label">capacidad</label>
    <input type="text" name="capacidad" id="capacidad" class="form-control" required>

    <input type="hidden" id="status" name="status" value="activo">

    <button type="submit" class="btn btn-success">Añadir Vehiculo</button>


    </form>
</div>


</div>






@stop