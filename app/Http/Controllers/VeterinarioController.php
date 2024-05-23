<?php

namespace App\Http\Controllers;

use App\Models\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function index(){
        $Veterinario = Veterinario::all();
        return view('Veterinarios.index',['Veterinario'=>$Veterinario]);
    }

    public function show($id){
        $Veterinario = Veterinario::find($id);
        return view('Veterinarios.show',compact('Veterinario'));
    }
    
    public function create(){
        return view('Veterinarios.create');
    }

    public function store(Request $request){
        $Veterinario = new Veterinario();
        $Veterinario ->nombre = $request ->nombre;
        $Veterinario ->apellido = $request ->apellido;

        $Veterinario->save();
        return redirect() -> route('Veterinario.index');
    }

    public function destroy($id){
        Veterinario::find($id)->delete();
        return redirect() -> route('Veterinario.index');
    }
    public function edit($id){
    $Veterinario = Veterinario::find($id);
    return view('Veterinarios.edit',compact('Veterinario'));
    }
    public function update(Request $request, $id){
        $Veterinario = Veterinario::find($id);
        $Veterinario ->nombre = $request ->nombre;
        $Veterinario ->apellido = $request ->apellido;        
        
        $Veterinario -> save();
        return redirect() -> route('Veterinario.index');
    }
}
