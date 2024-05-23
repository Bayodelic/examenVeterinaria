<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(){
        $Consulta = Consulta::all();
        return view('Consultas.index',['Consulta'=>$Consulta]);
    }

    public function show($id){
        $Consulta = Consulta::find($id);
        return view('Consultas.show',compact('Consulta'));
    }

    public function create(){
        return view('Consultas.create');
    }

    public function store(Request $request){
        $Consulta = new Consulta();
        $Consulta->id = $request->id;
        $Consulta->id_mascota = $request->id_mascota;        
        $Consulta->fecha = $request->fecha;
        $Consulta->hora = $request->hora;
        $Consulta->descripcion = $request->descripcion;
        $Consulta->veterinario = $request->veterinario;
        $Consulta->id_veterinario = $request->id_veterinario;
        $Consulta->save();
        return redirect() -> route('Consultas.index');
    }

    public function destroy($id){
        Consulta::find($id)->delete();
        return redirect() -> route('Consultas.index');
    }
    public function edit($id){
    $Consulta = Consulta::find($id);
    return view('Consultas.edit',compact('Consulta'));
    }
    public function update(Request $request, $id){
        $Consulta = Consulta::find($id);
        $Consulta->id = $request->id;
        $Consulta->id_mascota = $request->id_mascota;        
        $Consulta->fecha = $request->fecha;
        $Consulta->hora = $request->hora;
        $Consulta->descripcion = $request->descripcion;
        $Consulta->veterinario = $request->veterinario;
        $Consulta->id_veterinario = $request->id_veterinario;

        $Consulta->save();    
   
        return redirect() -> route('Consultas.index');
    }
}
