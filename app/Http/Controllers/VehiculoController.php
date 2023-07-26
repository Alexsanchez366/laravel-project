<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    //
    public function index(){
        $Vehiculos = Vehiculo::all();
        return view('vehiculos.index',['datos' => $Vehiculos ]);
    }
  
    public function create(){
        return view('vehiculos.create');
    }

    public function store(Request $request){
        $Vehiculos = Vehiculo::create($request->all());
        return redirect('vehiculos');
    
    }

    public function edit(string $id){
        $Vehiculos = Vehiculo::findOrFail($id);
        return view('vehiculos.edit',['data'=> $Vehiculos]);
    }
    public function update(Request $request,string $id){
        $Vehiculos = Vehiculo::findOrfail($id);
        $Vehiculos ->update($request->all());
        return redirect('vehiculos');
    }
    public function destroy(string $id){
        $Vehiculos = Vehiculo::findOrfail($id);
        $Vehiculos->status='inactivo';
        return redirect('vehiculos');
    }

}
