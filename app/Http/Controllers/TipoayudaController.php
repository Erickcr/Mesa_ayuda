<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Help_topic;
use App\Models\Tipo_usuario;
use App\Models\User;

class TipoayudaController extends Controller
{
    //mostrar tipo de ayuda
    public function index()
    {

        $user = Auth::user();
        $obtener = $user->id_tipo_usuario;
        if ($obtener=="4") {
        $ayuda = \DB::table('help_topic')
                    ->join('tipo_usuario','tipo_usuario.id','=', 'help_topic.id_tipo_usuario')
                    ->select('help_topic.id','help_topic.help_topic','help_topic.created_at','help_topic.updated_at','tipo_usuario.tipo_usuario')
                    ->orderBy('id', 'DESC')
                    ->paginate(5);
        return view('TipoAyuda.index')->with('ayuda',$ayuda);
        }else{
            return view('Tablero.Tablero');
        }
    }
    //añadir tipo de ayuda
    public function userform(){
    
        $user = Auth::user();
        $tipousuario = tipo_usuario::all()
                        ->except([4,5]);
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            return view('TipoAyuda.agregarTipoAyuda', compact('tipousuario'));
         
        }else {return redirect(route('dashboard'));}
    
    }  
    public function confirmform(Request $request){
        $userdata = request()->except('_token');
        $ayuda = new help_topic();
        $ayuda->help_topic = $request->ayuda;
        $ayuda->id_tipo_usuario = $request->tipo_usuario;
        $ayuda->save();
        return back()->with('success', 'Tipo de Ayuda Registrada Correctamente');
    }

    //editar tipo de ayuda
    public function edit($id){
        $usuario = Auth::user();
        $accesos = $usuario->id_tipo_usuario;
        if ($accesos=="4") {
        $tipoayuda = help_topic::find($id);
        $tipousuario = tipo_usuario::all()
                        ->except([4,5]);
        return view('TipoAyuda.edit',compact('tipoayuda','tipousuario'));
        }else{
            return view('Tablero.Tablero');
        }
    }

    public function editform(Request $request, $id){
        $edita = Auth::user();
        $accesso = $edita->id_tipo_usuario;
        if ($accesso=="4") {
        $accesso=request()->except((['_token','_method']));
        $edita = help_topic::where('id',"=",$id)->update($accesso);
        return back()->with('success', 'Tipo de Ayuda Modificada');

        } else{
            return view('Tablero.Tablero');
        }
    }
    //elimnar tipo de ayuda
    public function destroy($id){
        $usuario = Auth::user();
        $accesos = $usuario->id_tipo_usuario;
        if ($accesos=="4") {
            $tipoayuda = help_topic::destroy($id);
         return back()->with('tipoayudaEliminada', 'Tipo de Ayuda eliminada');
       
        }else{
            return view('Tablero.Tablero');
        }
    }
}
