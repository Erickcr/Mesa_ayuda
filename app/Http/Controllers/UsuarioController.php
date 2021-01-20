<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $obtener = $user->id_tipo_usuario;
        if ($obtener=="4") {
        $usuarios = \DB::table('users')
                    ->select('users.*')
                    ->where('id_tipo_usuario', '=', "4")
                    ->orderBy('id', 'DESC')
                    ->paginate(5);
        return view('Administrador.Usuarios')->with('usuarios',$usuarios);
    }else{
        return view('Tablero.Tablero');
    }

}

public function delete( $id){
    $usuari = Auth::user();
    $accesos = $usuari->id_tipo_usuario;
    if ($accesos=="4") {
       $usuari::destroy($id);
     return back()->with('usuarioEliminado', 'Usuario eliminado');
   
    }else{
        return view('Tablero.Tablero');
    }
}

public function editform(Request $request, $id){
    $edita = Auth::user();
    $accesso = $edita->id_tipo_usuario;
    if ($accesso=="4") {
    $accesso=request()->except((['_token','_method']));
    $edita::where('id',"=",$id)->update($accesso);
    return back()->with('usuariomodificado', 'Usuario modificado');

} else{
    return view('Tablero.Tablero');
}
}

public function show(Request $request, $id){
    $usuari = Auth::user();
    $accesos = $usuari->id_tipo_usuario;
    if ($accesos=="4") {
$user = $usuari::find($id);
return view('Administrador.ShowUser')->with('user', $user);
}else{
    return view('Tablero.Tablero');
}
}

public function edit($id){
    $usuario = Auth::user();
    $accesos = $usuario->id_tipo_usuario;
    if ($accesos=="4") {
$user = $usuario::find($id);
return view('Administrador.edit')->with('user', $user);
}else{
    return view('Tablero.Tablero');
}
}

public function userform(){
   
    return view ('Administrador.userform');

    
}
public function confirmform(Request $request){
    $userdata = request()->except('_token');
    $usuario = new user();
    $usuario->name = $request->name;
    $usuario->apellidos = $request->apellidos;
    $usuario->id_tipo_usuario = 4;
    $usuario->email = $request->email;
    $usuario->password = bcrypt($request->password);
    $usuario->save();
    return back()->with('usuarioGuardado', 'Usuario Registrado Correctamente');
}
 

public function jefesarea(){

    $user = Auth::user();
    $acceso = $user->id_tipo_usuario;
    if ($acceso=="4") {
    $jefes = \DB::table('users')
                ->select('users.*')
                ->where('id_tipo_usuario', '=', "5")
                ->orderBy('id', 'DESC')
                ->paginate(5);
    return view('JefeArea.JefeUsuarios')->with('jefesarea', $jefes) ;
}else{
    return view('Tablero.Tablero');
}
}



}

    
   
    

    


