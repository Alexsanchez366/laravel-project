@extends('layout')

@section('contenido')

<h1>Echo Logistics</h1>
<div class="btn btn-primary">
<a href="{{url('vehiculos')}}" class="text-light"> AÑADIR VEHICULOS</a>
</div>

<div class="btn btn-success">
    <a href="{{url('entregados')}}" class="text-light">ENTREGADO</a>

</div>

@stop