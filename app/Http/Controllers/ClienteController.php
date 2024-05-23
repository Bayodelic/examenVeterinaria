<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $Cliente = Cliente::all();
        return view('Clientes.index',['Cliente'=>$Cliente]);
    }

    public function show($id){
        $Cliente = Cliente::find($id);
        return view('Clientes.show',compact('Cliente'));
    }
    
    public function create(){
        return view('Clientes.create');
    }

    public function store(Request $request){
        $Cliente = new Cliente();
        $Cliente ->nombre = $request ->nombre;
        $Cliente ->apellido = $request ->apellido;
        $Cliente ->telefono = $request ->telefono; 
        $Cliente ->id_mascotas = $request -> id_mascotas;

        $Cliente->save();
        return redirect() -> route('Cliente.index');
    }

    public function destroy($id){
        Cliente::find($id)->delete();
        return redirect() -> route('Cliente.index');
    }
    public function edit($id){
    $Cliente = Cliente::find($id);
    return view('Clientes.edit',compact('Cliente'));
    }
    public function update(Request $request, $id){
        $Cliente = Cliente::find($id);
        $Cliente ->nombre = $request ->nombre;
        $Cliente ->apellido = $request ->apellido;
        $Cliente ->telefono = $request ->telefono;  
        $Cliente ->id_mascotas = $request ->id_mascotas;      
        
        $Cliente -> save();
        return redirect() -> route('Cliente.index');
    }   
}
