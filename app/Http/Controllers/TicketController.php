<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\Help_topic;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $estado, $id_usuario, $asunto, $id_help_topic;
    
    

    public function index()
    {
        $user = Auth::user();
        $tickets = Ticket::where('id_usuario', $user->id)->get();
        $ticket2 = Ticket::where('id_usuario', $user->id)->count();
        if ($ticket2 == 0) {
            return back()->with('status', 'no tienes ningun ticket');
        }
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            return view('ticket.admin.index');
         
        }else return view('ticket.index', compact('tickets'));
        
        
        /*
        $help_topic = Help_Topic::all();
        $tickets = Ticket::latest('id')->get();
        return view('livewire.ticket-component', compact('tickets', 'help_topic'));
    */}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
         
        $tickets = Ticket::where('id_usuario', $user->id)->get();
        /*
        1 primero
        2 segundo
        3 tercero
        */
         
        foreach ($tickets as $ticket) {
            if ($ticket->estado != "Respondido") {
                return back()->with('status', 'Solo puedes tener 1 ticket activo!');
            }
            
               
            
        }
        $help_topic = Help_Topic::where('id_tipo_usuario', $user->id_tipo_usuario)->get();
       
     
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            return view('Administrador.Administrador', compact('user'));
         
        }
         
        return view('ticket.create', compact( 'help_topic'));
        /*
        TRAER LOS TICKETS QUE TIENE CREADOS / LISTO

        VERIFICAR SI EL ESTADO DE ESOS TICKETS ES RESPONDIDO / LISTO
 
        SI ES RESPONDIDO DEJARLO CREAR OTRO TICKET / LISTO 

        SI NO, DEVOLVERLO Y NO DEJARLO CREAR UN TICKET / LISTO
        
        
        */
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $user = Auth::user();
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            return view('Administrador.Administrador', compact('user'));         
        }
        $fileName = time().'.'.$request->file->extension();  
        
        $request->file->move(public_path('storage/Archivos'), $fileName);

        $tickets = new Ticket();       
        $tickets->id_help_topic = $request->id_help_topic;
        $tickets->id_usuario = Auth::user()->id;
        $tickets->estado = 'Pendiente';
        $tickets->asunto = $request->asunto;
        $tickets->file = $fileName;       
        $tickets->save();
        
        return redirect()->route('ticket.show', $tickets);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {   
        $user = Auth::user();
        $ticket = Ticket::find($id);
        if ($ticket->id_usuario == $user->id) {
            $help_topic = Help_Topic::find($ticket->id_help_topic);
       
            return view('ticket.confirm', compact('ticket','help_topic', 'user'));
        }else return redirect()->route('inicio');
       
    }

    public function mostrar($id)
    {   
        $user = Auth::user();
        $ticket = Ticket::find($id);
        if ($ticket->id_usuario == $user->id) {
            $help_topic = Help_Topic::find($ticket->id_help_topic);
       
            return view('ticket.show', compact('ticket','help_topic', 'user'));
        }else return redirect()->route('inicio');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
     
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            $ticket = Ticket::destroy($id);
            return back()->with('ticketEliminado', 'ticket eliminado');
         
        }
    }

    public function mostraradmin($estado){
        
        $user = Auth::user();
        $acceso = $user->id_tipo_usuario;
     
        if ($acceso=="4") {
        $nuevos = DB::table('ticket')
        ->where('ticket.estado', '=', $estado)
        ->join('help_topic','ticket.id_help_topic','=','help_topic.id')
        ->join('users','ticket.id_usuario','=','users.id')
        ->select('ticket.id','ticket.estado','ticket.asunto','ticket.created_at','help_topic.help_topic','users.name')
        ->orderBy('id', 'DESC')
        ->paginate(5);
        return view('Administrador.Adminticket')->with('nuevos',$nuevos) ;
    }else{
        return view('Tablero.Tablero');
    }
        
    }
}
