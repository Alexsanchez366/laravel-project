@extends('layout')

@section('contenido')

<div class="card">
    <div class="card-header">
        Añadir Empresa

    </div>
<div class="card-body">
    <form action="{{url('entregados')}}" method="POST">
        @csrf 
    <label for="placaa" class="form-label">empresa</label>
    <input type="text" id="empresa" name="empresa" class="form-control" required>
    
    <label for="modelo" class="form-label">tiempo_estimado</label>
    <input type="text" name="tiempo_estimado" id="tiempo_estimado" class="form-control" required>

    <label for="tipo_auto" class="form-label">inicio</label>
    <input type="text" name="inicio" id="inicio" class="form-control" required>

    <label for="capacidad" class="form-label">final</label>
    <input type="text" name="final" id="final" class="form-control" required>

    <label for="capacidad" class="form-label">vehiculo_id</label>
    <input type="text" name="vehiculo_id" id="vehiculo_id" class="form-control">

    <label for="capacidad" class="form-label">id</label>
    <input type="text" name="id" id="id" class="form-control" >


    <button type="submit" class="btn btn-success">Añadir Empresa</button>


    </form>
</div>


</div>






@stop