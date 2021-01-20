<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Help_topic;
use App\Models\Tipo_usuario;
use App\Models\departamento;
use App\Models\User;

class AreasController extends Controller
{
        public function index()
        {

            $user = Auth::user();
            $obtener = $user->id_tipo_usuario;
            if ($obtener=="4") {
            $areas = \DB::table('departamento')
                        ->orderBy('id', 'DESC')
                        ->paginate(5);
            return view('Areas.index')->with('areas',$areas);
        }else{
            return view('Tablero.Tablero');
        }
    }

    public function destroy($id){
        $usuario = Auth::user();
        $accesos = $usuario->id_tipo_usuario;
        if ($accesos=="4") {
            $area = departamento::destroy($id);
         return back()->with('areaEliminado', 'Area eliminada');
       
        }else{
            return view('Tablero.Tablero');
        }
    }

    public function edit($id){
        $usuario = Auth::user();
        $accesos = $usuario->id_tipo_usuario;
        if ($accesos=="4") {
    $area = departamento::find($id);
    return view('Areas.edit')->with('area', $area);
    }else{
        return view('Tablero.Tablero');
    }
    }

    public function editform(Request $request, $id){
        $edita = Auth::user();
        $accesso = $edita->id_tipo_usuario;
        if ($accesso=="4") {
        $accesso=request()->except((['_token','_method']));
        $edita = departamento::where('id',"=",$id)->update($accesso);
        return back()->with('success', 'Área Modificada');

    } else{
        return view('Tablero.Tablero');
    }
}


/*public function userform(){
    $usuarios = Tipo_usuario::all();
     
    return view ('Areas.userform', compact('usuarios'));

    
}*/

public function userform(){
    
    return view ('Areas.agregarArea');

}  
public function confirmform(Request $request){
    $userdata = request()->except('_token');
    $area = new departamento();
    $area->nom_departamento = $request->area;
    $area->save();
    return back()->with('success', 'Área Registrada Correctamente');
}
/*
public function confirmform(Request $request){
    $userdata = request()->except('_token');
    $help_topic = new Help_topic();
    
    
    $help_topic ->help_topic = $request->help_topic;
    $help_topic ->id_tipo_usuario = $request->user;
    $help_topic->save();
    
    
    return back()->with('success', 'Área Registrada Correctamente');
}

*/ 
}