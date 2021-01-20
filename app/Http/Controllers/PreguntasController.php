<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use Illuminate\Http\Request;
use App\Models\Help_topic;
use App\Models\Preguntas_frecuentes;
use Illuminate\Support\Facades\Auth;
class PreguntasController extends Controller
{
    public function index(){

        $preguntas1 = departamento::all();

        return view('preguntas.Preguntas_Frecuentes', compact('preguntas1'));
        
    }

    public function createadm(){

         
        $user = Auth::user();
        $departamento = departamento::all();
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
            return view('AdminPreguntas.añadirPreguntas', compact('departamento'));
         
        }else {return redirect(route('dashboard'));}
         
        
        
        
    }
    public function storeadm(Request $request)
    {

         
        $user = Auth::user();
     
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
             
      
            if(empty($request->file)){
                $fileName = "";
    
                }else{
                $file = $request->file('file');
                $fileName = $file->getClientOriginalName();  
                $request->file->move(public_path('storage/Archivos'), $fileName);
                }
    
             
        
           $pregunta = new Preguntas_frecuentes();
           $pregunta->pregunta= $request->pregunta;
           $pregunta->respuesta = $request->respuesta;
           $pregunta->id_departamento = $request->departamento;
           $pregunta->file = $fileName;
           $pregunta->save();
           return back()->with('success', 'Pregunta Frecuente agregada');
         
        }else {return redirect(route('dashboard'));}
       
    }

   
    
    public function show($id){

        $pregunta = departamento::findOrfail($id);
        $pregunta1 = Preguntas_frecuentes::where('id_departamento','=', $id)->get();


        return view('preguntas.show', compact('pregunta','pregunta1'));
    }

     
    public function show2($id){

        $pregunta = Preguntas_frecuentes::findOrfail($id);
        $preguntas = Preguntas_frecuentes::where('id','=', $id)->get();


        return view('preguntas.show2', compact('pregunta','preguntas'));
        
    }

    public function adminindex()
        {

            $user = Auth::user();
            $obtener = $user->id_tipo_usuario;
            if ($obtener=="4") {
            $pregunta = \DB::table('preguntas_frecuentes')
                        ->join('departamento','departamento.id','=', 'preguntas_frecuentes.id_departamento')
                        ->select('preguntas_frecuentes.id','preguntas_frecuentes.pregunta','preguntas_frecuentes.respuesta','preguntas_frecuentes.file','preguntas_frecuentes.created_at','preguntas_frecuentes.updated_at','departamento.nom_departamento')
                        ->orderBy('id', 'DESC')
                        ->paginate(5);
            return view('AdminPreguntas.adminIndex')->with('pregunta',$pregunta);
        }
        else{
            return view('Tablero.Tablero');
        }
    }

    public function edit($id){
            $usuario = Auth::user();
            $accesos = $usuario->id_tipo_usuario;
            if ($accesos=="4") {
        $pregunta = Preguntas_frecuentes::find($id);
        $departamento = departamento::all();
        return view('AdminPreguntas.edit',compact('pregunta','departamento'));
        }else{
            return view('Tablero.Tablero');
        }
    }

   

    public function storeadm2(Request $request)
    {

         
        $user = Auth::user();
     
        $acceso = $user->id_tipo_usuario;
        if ($acceso=="4") {
             
            if(empty($request->file)){
                $fileName = "";
    
                }else{
                $file = $request->file('file');
                $fileName = $file->getClientOriginalName(); 
                $request->file->move(public_path('storage/Archivos'), $fileName);
                }
    
             
        
           $pregunta = new Preguntas_frecuentes();
           $pregunta->pregunta= $request->pregunta;
           $pregunta->respuesta = $request->respuesta;
           $pregunta->id_departamento = $request->departamento;
           $pregunta->file = $fileName;
           $pregunta->save();
         
        }else {return redirect(route('dashboard'));}
       
    }


    public function editform(Request $request, $id){
        $edita = Auth::user();
        $accesso = $edita->id_tipo_usuario;
        if ($accesso=="4") {
        $accesso=request()->except((['_token','_method']));
        $edita = Preguntas_frecuentes::where('id',"=",$id)->update($accesso);
        return back()->with('success', 'Pregunta Modificada');

        } else{
            return view('Tablero.Tablero');
        }
    }

    public function destroy($id){
        $usuario = Auth::user();
        $accesos = $usuario->id_tipo_usuario;
        if ($accesos=="4") {
            $pregunta = Preguntas_frecuentes::destroy($id);
         return back()->with('preguntaEliminado', 'pregunta eliminada');
       
        }else{
            return view('Tablero.Tablero');
        }
    }
}


