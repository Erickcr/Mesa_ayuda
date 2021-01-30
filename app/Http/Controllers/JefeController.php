<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\departamento;
use App\Models\Ticket;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class JefeController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $acceso = $user->id_tipo_usuario;


        if ($acceso=="4") {
        $jefesarea = DB::table('users')
                    ->select('users.*')
                    ->where('id_tipo_usuario', '=', "5")
                    ->orderBy('id', 'DESC')
                    ->paginate(5);
        return view('JefeArea.JefeUsuarios')->with('jefesarea', $jefesarea) ;
    }else{
        return view('Tablero.Tablero');
    }

}
public function jefeform(){
   
    return view ('JefeArea.NuevoJefe');

    
}


public function nuevojefe(Request $request){
    $userdata = request()->except('_token');
    $usuario = new user();
    $usuario->name = $request->name;
    $usuario->apellidos = $request->apellidos;
    $usuario->id_tipo_usuario = 5;
    $usuario->email = $request->email;
    $usuario->password = bcrypt($request->password);
    $usuario->save();
    return back()->with('usuarioGuardado', 'Jefe de área registrado correctamente');
}

public function departamento(){
    $preguntas1 = departamento::all();

    return view('JefeArea.JefeTicket', compact('preguntas1'));
}

public function show($id){

    $pregunta = departamento::findOrfail($id);
    $pregunta1 = Ticket::join('help_topic','ticket.id_help_topic','=','help_topic.id')
         ->join('users','ticket.id_usuario','=','users.id')
         ->select('ticket.id','ticket.estado','ticket.asunto','ticket.created_at','help_topic.help_topic','users.name')
         ->where('ticket.estado','=','Canalizado')
         ->where('id_departamento','=', $id)
         ->orderBy('id', 'DESC')
         ->paginate(5);
         
    
    
    
    //     


    return view('JefeArea.JefeView', compact('pregunta','pregunta1'));
}

}
