<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;
use PHPUnit\Event\Tracer\Tracer;

class TratamientoController extends Controller
{
    public function index(){
        $Tratamiento = Tratamiento::all();
        //forma para referenciar la vista, cuando creamos un folder
        return view('Tratamientos.index',['Tratamiento'=>$Tratamiento]);
    }

    public function show($id){
        $Tratamiento = Tratamiento::find($id);
        return view('Tratamientos.show',compact('Tratamiento'));

    }

    public function create(){
        return view('Tratamientos.create');

    }

    public function store(Request $request){
        $Tratamiento = new Tratamiento();       
        $Tratamiento->nombre = $request->nombre;
        $Tratamiento->descripcion = $request->descripcion;
        $Tratamiento->precio = $request->precio;
        $Tratamiento->save();
        return redirect()->route('Tratamiento.index');
    }

    public function destroy($id){
        Tratamiento::find($id)->delete();
        return redirect()->route('Tratamiento.index');
    }    

    public function edit($id)
    {
        $Tratamiento = Tratamiento::find($id);
        return view('Tratamientos.edit', compact('Tratamiento'));
    }

    public function update(Request $request, $id){
        $Tratamiento = Tratamiento::find($id);
        $Tratamiento->id = $request->id;                
        $Tratamiento->nombre = $request->nombre;
        $Tratamiento->descripcion = $request->descripcion;
        $Tratamiento->precio = $request->precio;

        $Tratamiento->save();    
   
        return redirect() -> route('Tratamiento.index');
    }
        
}
