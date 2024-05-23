<?php

namespace App\Http\Controllers;

use App\Models\VentaTratamiento;
use Illuminate\Http\Request;

class VentaTratamientoController extends Controller
{
    public function index(){
        $VentaTratamiento = VentaTratamiento::all();
        //forma para referenciar la vista, cuando creamos un folder
        return view('VentaTratamiento.index',['VentaTratamiento'=>$VentaTratamiento]);
    }

    public function show($id){
        $VentaTratamiento = VentaTratamiento::find($id);
        return view('VentaTratamiento.show',compact('VentaTratamiento'));
    }

    public function create(){
        return view('VentaTratamiento.create');
    }

    public function store(Request $request){
        $VentaTratamiento = new VentaTratamiento();
        $VentaTratamiento->id = $request->id;       
        $VentaTratamiento->cantidad = $request->cantidad;
        $VentaTratamiento->total = $request->total;
        $VentaTratamiento->fecha = $request->fecha;
        $VentaTratamiento->id_tratamiento = $request->id_tratamiento;
        $VentaTratamiento->save();
        return redirect() -> route('VentaTratamiento.index');
    }

    public function destroy($id){
        VentaTratamiento::find($id)->delete();
        return redirect() -> route('VentaTratamiento.index');
    }
    public function edit($id){
    $VentaTratamiento = VentaTratamiento::find($id);
    return view('VentaTratamiento.edit',compact('VentaTratamiento'));
    }
    public function update(Request $request, $id){
        $VentaTratamiento = VentaTratamiento::find($id);
        $VentaTratamiento->id = $request->id;               
        $VentaTratamiento->cantidad = $request->cantidad;
        $VentaTratamiento->total = $request->total;
        $VentaTratamiento->fecha = $request->fecha;
        $VentaTratamiento->id_tratamiento = $request->id_tratamiento;

        $VentaTratamiento->save();    
   
        return redirect() -> route('VentaTratamiento.index');
    }
}
