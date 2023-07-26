<h3>soy index de entrega</h3>
@extends('layout')

@section('contenido')

<table class="table">
    <thead>
    <tr>
        <th scope="col">empresa</th>
        <th scope="col">tiempo_estimado</th>
        <th scope="col">inicio</th>
        <th scope="col">final</th>
        <th scope="col">vehiculo_id</th>
        <th scope="col">placa</th>
    </tr>
    </thead>

    <tbody>
        @foreach($entregados as $entregado)
        
        <tr>
            <td scope="row">{{$entregado->empresa}}</td>
            <td>{{$entregado->tiempo_estimado}}</td>
            <td>{{$entregado->inicio}}</td>
            <td>{{$entregado->final}}</td>
            <td>{{$entregado->vehiculo_id}}</td>
            <td>{{$entregado->placa}}</td>
            <td> 
        
        
            </td>
        </tr>
       
        @endforeach
    </tbody>
</table>

<div>
    <a class="btn btn-primary" href="{{url('/entregados/create')}}">Añadir Empresa</a>
</div>
