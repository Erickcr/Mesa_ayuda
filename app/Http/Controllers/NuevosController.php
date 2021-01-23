<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Help_topic;
use Auth;
use Illuminate\Support\Facades\DB;
use tickets;
use Illuminate\Support\Collection;

class NuevosController extends Controller
{
    //
    
    public function index()
    {

        $user = Auth::user();
        $acceso = $user->id_tipo_usuario;
     
        if ($acceso=="4") {
        $nuevos = DB::table('ticket')
        ->join('help_topic','ticket.id_help_topic','=','help_topic.id')
        ->join('users','ticket.id_usuario','=','users.id')
        ->select('ticket.id','ticket.estado','ticket.asunto','ticket.created_at','ticket.updated_at','help_topic.help_topic','users.name')
        ->where('ticket.estado','=','Pendiente')
        ->orderBy('id', 'DESC')
        ->paginate(5);
        return view('Administrador.Adminticket')->with('nuevos',$nuevos) ;
    }else{
        return view('Tablero.Tablero');
    }

}


}
