@extends('layout')

@section('contenido')

<div class="card">
    <div class="card-header">
        Editar Vehiculo

    </div>
<div class="card-body">
    <form action="{{url('vehiculos/'.$data->id)}}" method="POST">
        @csrf 
        @method('delete')
    <label for="placaa" class="form-label">placaa</label>
    <input type="text" id="placaa" name="placaa" class="form-control" required value="{{$data->placaa}}">
    
    <label for="modelo" class="form-label">modelo</label>
    <input type="text" name="modelo" id="modelo" class="form-control" required value="{{$data->modelo}}">

    <label for="tipo_auto" class="form-label">tipo_auto</label>
    <input type="text" name="tipo_auto" id="tipo_auto" class="form-control" required value="{{$data->tipo_auto}}">

    <label for="capacidad" class="form-label">capacidad</label>
    <input type="text" name="capacidad" id="capacidad" class="form-control" required value="{{$data->capacidad}}">

    <button type="submit" class="btn btn-success">Añadir Vehiculo</button>

    </form>
</div>


</div>
