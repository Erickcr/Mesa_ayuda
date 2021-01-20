<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Help_topic;
use Auth;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;
use tickets;
use Illuminate\Support\Collection;



class HistorialController extends Controller
{
    public function index()
    {
    $user = Auth::user();
    $acceso = $user->id_tipo_usuario;
 
    if ($acceso=="4") {
             $historial = DB::table('ticket')
             ->select(DB::raw('count(estado) as NumTick'))
             ->where('estado', '=', 'Respondido')
             ->get();

             $canalizados = DB::table('ticket')
             ->select(DB::raw('count(estado) as NumTick'))
             ->where('estado', '=', 'canalizado')
             ->get();

             $resueltos = DB::table('ticket')
             ->select(DB::raw('count(estado) as NumTick'))
             ->where('estado', '=', 'Pendiente')
             ->get();

             $total = DB::table('ticket')
             ->select(DB::raw('count(estado) as NumTick'))
             ->get();

             $ticket= Ticket::select(\DB::raw("count(*) as ticketg"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(\DB::raw("Month(created_at)"))
            ->pluck('ticketg');
        
             
    // return view('Administrador.AdminHistorial')->with('historial',$historial) ;
    return view('Administrador.AdminHistorial', compact('historial', 'canalizados','resueltos','total','ticket'));
}else{
    return view('Tablero.Tablero');
}

}



}