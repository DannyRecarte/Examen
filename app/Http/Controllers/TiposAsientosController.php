<?php

namespace App\Http\Controllers;
use App\Models\TipoAsiento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiposAsientosController extends Controller
{
    public function showTiposAsientos(){
        $tipoAsientos = TipoAsiento::all();
        return view('tiposAsientos',compact('tipoAsientos'));
    }

    public function agregarTipoAsientos(){
        
        return view('agregarTipoAsiento');
    }
    public function guardarTiposAsientos(Request $request){
        $tipoAsiento = new TipoAsiento();
        $tipoAsiento->descripcion = $request->descripcion;
        $tipoAsiento->precio = $request->precio;
        $tipoAsiento->estado = $request->estado;

        $tipoAsiento->save();
        $tipoAsientos = TipoAsiento::all();
        return redirect('/inicio');

    }

    public function eliminarTiposAsientos($id){
        $tipoAsiento= TipoAsiento::find($id);
        $tipoAsiento->estado = 'I';
        $tipoAsiento->save();
        $tipoAsientos = TipoAsiento::all();
        return redirect('/inicio');
    }
    public function editarAsientos($id){
        $tipoAsientos = TipoAsiento::find($id);
        return view('editarAsientos',compact('tipoAsientos'));
    }
    public function actualizarAsientos(Request $request,$id){
        $tipoAsiento= TipoAsiento::find($id);
        $tipoAsiento->descripcion = $request->descripcion; 
        $tipoAsiento->precio=$request->precio;
        $tipoAsiento->estado=$request->estado;
        $tipoAsiento->save();
        $tipoAsientos = TipoAsiento::all();
        return redirect('/inicio');

    }

}
