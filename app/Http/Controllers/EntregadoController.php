<?php

namespace App\Http\Controllers;

use App\Models\Entregado;
use Illuminate\Http\Request;

class EntregadoController extends Controller
{
    //
    public function index(){
        $Entregado = Entregado::all();
        return view('entregados.entrega',['entregados' => $Entregado ]);
    }

    public function create(){
        return view('entregados.create');
    }

    public function store(Request $request){
        $Entregado = Entregado::create($request->all());
        return redirect('entregados');
    
    }
}
