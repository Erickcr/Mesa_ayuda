<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RespuestaController extends Controller
{
    public function respuestaform($id){
        $ticket = Ticket::find($id);
        $data=collect([
            ['id_estado'=>'Canalizado','estado' => 'Canalizado'],
            ['id_estado'=>'Atendido','estado' => 'Atendido'],
        ]);
        $estado=$data->pluck('id_estado', 'estado');
        $estado->all();

        $dept = DB::table('departamento')
        ->select('*')
        ->get();
        
        
 

        return view('Administrador.AdminRespuesta', compact('ticket','estado','dept'));

       
    }

    public function respuesta(Request $request, $id){
      
        $datoTicket = request()->except((['_token','_method']));
        Ticket::where('id','=',$id)
        
        ->update($datoTicket);
       
        return back()->with('respuestaGenerada', 'Respuesta Generada');

    }
}
