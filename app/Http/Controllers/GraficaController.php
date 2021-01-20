<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
class GraficaController extends Controller
{
    public function graficaTicket(){

        $ticket= Ticket::select(\DB::raw("count(*)as ticketg"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('ticketg');
        return view('Administrador.AdminGrafica', compact('ticket'));
    }
}
