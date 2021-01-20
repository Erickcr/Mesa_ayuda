<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TicketComponent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\NuevosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\PendientesController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\JefeController;
use App\Http\Controllers\GraficaController;
use App\Http\Controllers\TipoayudaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('dashboard');

Route::get('admin/ticket', [TicketController::class, 'index'])->name('ticket.admin.index')->middleware('auth');
Route::get('ticket' ,[TicketController::class, 'index'])->name('ticket.index')->middleware('auth');
Route::post('ticket' ,[TicketController::class, 'store'])->name('ticket.store')->middleware('auth');
Route::get('ticket/create',[TicketController::class, 'create'])->name('ticket.create')->middleware('auth');
Route::get('ticket/{id}', [TicketController::class,'show'])->name('ticket.show')->middleware('auth');
Route::get('ticket/mostrar/{id}', [TicketController::class,'mostrar'])->name('ticket.mostrar')->middleware('auth');
Route::get('admin/ticket/{estado}', [TicketController::class, 'mostraradmin'])->name('admin.mostrar')->middleware('auth');

Route::get('inicio', [LoginController::class, 'index'])->name('inicio');
Route::get('Login', [LoginController::class, 'index'])->middleware('auth') ;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/Acerca_de', function () {
        return view('Acerca_de');
    })->name('Acerca_de');
    Route::get('/Servicios', function () {
        return view('Servicios');
    })->name('Servicios');
    Route::get('/Contacto', function () {
        return view('Contacto');
    })->name('Contacto');
});
 
Route::get('PreguntasFrecuentes', [PreguntasController::class, 'index'])->name('preguntasfrecuentes.index');
Route::get('PreguntasFrecuentes/{id}', [PreguntasController::class, 'show'])->name('preguntasfrecuentes.show');
Route::get('PreguntasFrecuentes/Respuesta/{id}', [PreguntasController::class, 'show2'])->name('preguntasfrecuentes.show2');
 
Route::get('admin/dashboard', function () {
    $user = Auth::user();
    $acceso = $user->id_tipo_usuario;
    switch($acceso){
        
        case '1':
            return redirect()->route('inicio');
        break;
        case '3':
            return redirect()->route('inicio');
        break;
        case '2':
            return redirect()->route('inicio');
        break;
        case '5':
            return redirect()->route('inicio');
        break;
       
    }    
        
    return view('Administrador.Administrador', compact('user'));
})->name('admin');

Route::get('jefe/dashboard', function () {
    $user = Auth::user();
    $acceso = $user->id_tipo_usuario;
    switch($acceso){
        
        case '1':
            return redirect()->route('inicio');
        break;
        case '3':
            return redirect()->route('inicio');
        break;
        case '2':
            return redirect()->route('inicio');
        break;
        case '4':
            return redirect()->route('inicio');
        break;
       
    }    
        
    return view('JefeArea.Jefe', compact('user'));
})->name('jefe');


Route::get('nuevos' ,[NuevosController::class, 'index'])->name('Administrador.Adminticket');


Route::get('historial','HistorialController@index')->name('historial');







Route::get('usuarios' ,[UsuarioController::class, 'index'])->name('Administrador.Usuarios');
Route::get('jefesarea' ,[UsuarioController::class, 'jefesarea'])->name('JefeArea.JefeUsuarios');



Route::get('/show/{id}','UsuarioController@show')->name('show');



//Editar Usuario
Route::get('/edit/{id}','UsuarioController@edit')->name('edit');
Route::patch('/editform/{id}','UsuarioController@editform')->name('editform');
//Eliminar un usuario administrador. El usuario solo podrá eliminarse si este no tiene un ticket asociado.
Route::delete('/delete/{id}','UsuarioController@delete')->name('delete');
//Eliminar un ticket
Route::delete('/borrar/{id}','TicketController@destroy')->name('borrar');
//Nuevo Usuario
Route::get('nuevo' ,[UsuarioController::class, 'userform'])->name('Administrador.userform');
Route::post('agregado','UsuarioController@confirmform')->name('agregado');



//Nuevo Jefe de Área
Route::get('nuevojefe' ,[JefeController::class, 'jefeform'])->name('JefeArea.NuevoJefe');

Route::post('agregadojefe','JefeController@nuevojefe')->name('agregadojefe');



//admin preguntas frecuentes
Route::post('/admin/AgregarPreguntasFrecuentes', [PreguntasController::class, 'storeadm'])->name('AdminPreguntas.añadirPreguntas');
Route::get('/admin/AgregarPreguntasFrecuentes', [PreguntasController::class, 'createadm'])->name('AdminPreguntas.añadirPreguntas');
Route::get('/admin/PreguntasFrecuentes', [PreguntasController::class, 'adminindex'])->name('AdminPreguntas.adminIndex');
Route::get('/admin/EditarPreguntasFrecuentes/{id}',[PreguntasController::class, 'edit'])->name('AdminPreguntas.edit');
Route::post('/admin/EditarPreguntasFrecuentes/{id}',[PreguntasController::class, 'storeadm2'])->name('AdminPreguntas.edit');
Route::patch('/admin/EditarPreguntasFrecuentes/{id}',[PreguntasController::class, 'editform'])->name('AdminPreguntas.editform');
Route::delete('/admin/DeletePreguntasFrecuentes/{id}',[PreguntasController::class, 'destroy'])->name('AdminPreguntas.destroy');


Route::get('areas' ,[AreasController::class, 'index'])->name('Areas.index');
//Nueva Area
Route::get('NuevaArea' ,[AreasController::class, 'userform'])->name('Areas.agregarArea');
Route::post('AreaAgregada',[AreasController::class, 'confirmform'])->name('AreaAgregada');
//Eliminar Area
Route::delete('/deleteArea/{id}',[AreasController::class, 'destroy'])->name('Areas.destroy');
//Editar Usuario
Route::get('/editarArea/{id}',[AreasController::class, 'edit'])->name('Area.edit');

Route::patch('/editarArea/{id}',[AreasController::class, 'editform'])->name('Area.editform');

//dar respuesta
Route::get('/respuestaform/{id}','RespuestaController@respuestaform')->name('respuestaform');
Route::post('/respuesta/{id}','RespuestaController@respuesta')->name('respuesta');

//Respuesta del jefe de area
Route::get('Departamentos', [JefeController::class, 'departamento'])->name('JefeArea.JefeTicket');
Route::get('Departamentos/{id}', [JefeController::class, 'show'])->name('JefeArea.JefeView');

//admin tipo ayuda
Route::get('/admin/TipoAyuda' ,[TipoayudaController::class, 'index'])->name('TipoAyuda.index');
Route::get('/admin/NuevoTipoAyuda' ,[TipoayudaController::class, 'userform'])->name('TipoAyuda.agregarTipoAyuda');
Route::post('/admin/TipoAyudaAgregada',[TipoayudaController::class, 'confirmform'])->name('TipoAyudaAgregada');
Route::get('/admin/editarTipoAyuda/{id}',[TipoayudaController::class, 'edit'])->name('TipoAyuda.edit');
Route::patch('/admin/editarTipoAyuda/{id}',[TipoayudaController::class, 'editform'])->name('TipoAyuda.editform');
Route::delete('/deleteTipoAyuda/{id}',[TipoayudaController::class, 'destroy'])->name('TipoAyuda.destroy');
