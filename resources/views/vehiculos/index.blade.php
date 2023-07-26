@extends('layout')

@section('contenido')

<table class="table">
    <thead>
    <tr>
        <th scope="col">placaa</th>
        <th scope="col">modelo</th>
        <th scope="col">tipo_auto</th>
        <th scope="col">capacidad</th>
        <th scope="col">actions</th>
    </tr>
    </thead>

    <tbody>
        @foreach($datos as $vehiculos)
        <?php if($vehiculos->status === "activo"){ ?>
        <tr>
            <td scope="row">{{$vehiculos->placaa}}</td>
            <td>{{$vehiculos->modelo}}</td>
            <td>{{$vehiculos->tipo_auto}}</td>
            <td>{{$vehiculos->capacidad}}</td>
            <td> 
                <a class="btn btn-warning" href="{{url('vehiculos/'.$vehiculos->id)}}">Edit</a>
                <a class="btn btn-danger" method="POST" action="{{url('vehiculos/'.$vehiculos->id)}}">Delete</a>
            </td>
        </tr>
        <?php }?>
        @endforeach
    </tbody>
</table>

<div>
    <a class="btn btn-primary" href="{{url('/vehiculos/create')}}">Añadir Vehiculo</a>
</div>


@stop