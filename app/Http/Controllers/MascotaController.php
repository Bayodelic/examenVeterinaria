<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index(){
        $Mascota = Mascota::all();
        return view('Mascotas.index',['Mascota'=>$Mascota]);
    }

    public function show($id){
        $Mascota = Mascota::find($id);
        return view('Mascotas.show',compact('Mascota'));
    }
    
    public function create(){
        return view('Mascotas.create');
    }

    public function store(Request $request){
        $Mascota = new Mascota();
        $Mascota->id = $request->id;
        $Mascota ->nombre = $request ->nombre;
        $Mascota ->especie = $request ->especie;
        $Mascota ->raza = $request ->raza; 
        $Mascota ->fecha = $request ->fecha; 
        $Mascota -> hora = $request -> hora;
        $Mascota -> id_cliente = $request -> id_cliente;

        $Mascota->save();
        return redirect() -> route('Mascota.index');
    }

    public function destroy($id){
        Mascota::find($id)->delete();
        return redirect() -> route('Mascota.index');
    }

    public function edit($id){
    $Mascota = Mascota::find($id);
    return view('Mascotas.edit',compact('Mascota'));
    }
    public function update(Request $request, $id){
        $Mascota = Mascota::find($id);
        $Mascota->id = $request->id;
        $Mascota ->nombre = $request ->nombre;
        $Mascota ->especie = $request ->especie;
        $Mascota ->raza = $request ->raza;        
        $Mascota ->fecha = $request ->fecha;
        $Mascota -> hora = $request ->hora;
        $Mascota -> id_cliente = $request -> id_cliente;

        $Mascota -> save();
        return redirect() -> route('Mascota.index');
    }   
}
