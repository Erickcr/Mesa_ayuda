<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Inicio
    </x-slot>
        <div class="container py-3 max-w-7xl mx-auto sm:px-6">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">

            <p style="text-align:center; font-weight:italic; font-size: 30px;">¡Bienvenido de nuevo <strong>{{$user->name}} {{$user->ap_paterno}}</strong>!</p>
                <p style="text-align:center; font-weight:bold; font-size: 30px;">Selecciona que deseas hacer.</p>
                <br>
                <div class=" row bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                    <div class="py-3 col-6 col-md-4 col-lg-2">
                        <a href="{{ route('Administrador.Adminticket') }}">
                            <img style=" height: 80px;" class=" mx-auto md:mx-0 md:mr-8"
                                src="{{asset('imagenes/ticket.png')}}">
                            <br>
                            
                            <h2 style="text-align:center; font-weight:bold;">Tickets</h2>
                        </a>
                        <br>
                        <p style="font-family: 'Montserrat', sans-serif;" class=" text-center">Verifica si tienes nuevos tickets.</p>
                    </div>
                    <div class="py-3 col-6 col-md-4 col-lg-2">
                        <a href="{{ route('Administrador.Usuarios') }}">
                            <img style=" height: 80px;" class=" mx-auto md:mx-0 md:mr-8"
                                src="{{asset('imagenes/user (2).png')}}">
                            <br>

                            <h2 style="text-align:center; font-weight:bold;">Usuarios</h2>
                        </a>
                        <br>
                        <p style="font-family: 'Montserrat', sans-serif;" class=" text-center">Visualiza a los usuarios o añade a uno nuevo.</p>

                    </div>
                    <div class="py-3 col-6 col-md-4 col-lg-2">
                    <a href="{{ route('historial') }}">
                            <img style=" height: 80px;" class=" mx-auto md:mx-0 md:mr-8"
                                src="{{asset('imagenes/history.png')}}">
                            <br>

                            
                            <h2 style="text-align:center; font-weight:bold;">Historial</h2>
                        </a>
                        <br>
                        <p style="font-family: 'Montserrat', sans-serif;" class=" text-center">Consulta el historial de tickets en este tiempo.</p>
                    </div>
                    <div class="py-3 col-6 col-md-4 col-lg-2">
                        <a href="{{ route('AdminPreguntas.adminIndex') }}">
                            <img style=" height: 80px;" class=" mx-auto md:mx-0 md:mr-8"
                                src="{{asset('imagenes/question (1).png')}}">
                            <br>

                        
                            <h2 style="text-align:center; font-weight:bold;">Preguntas Frecuentes</h2>
                        </a>
                        <br>
                        <p style="font-family: 'Montserrat', sans-serif;" class=" text-center">Visualiza, Edita, Agrega o Elimina Preguntas Frecuentes.</p>

                    </div>
                    <div class="py-3 col-6 col-md-4 col-lg-2">
                        <a href="{{route('Areas.index')}}">
                            <img style=" height: 80px;" class=" mx-auto md:mx-0 md:mr-8"
                                src="{{asset('imagenes/plus.png')}}">
                            <br>

                        
                            <h2 style="text-align:center; font-weight:bold;">Àreas del ITM.</h2>
                        </a>
                        <br>
                        <p style="font-family: 'Montserrat', sans-serif;" class=" text-center">Visualiza, Edita, Agrega o Elimina Àreas.</p>


                    </div>

                    <div class="py-3 col-6 col-md-4 col-lg-2">
                        <a href="{{route('TipoAyuda.index')}}">
                            <img style=" height: 80px;" class=" mx-auto md:mx-0 md:mr-8"
                                src="{{asset('imagenes/tipo_ayuda.png')}}">
                            <br>

                        
                            <h2 style="text-align:center; font-weight:bold;">Tipos de ayuda.</h2>
                        </a>
                        <br>
                        <p style="font-family: 'Montserrat', sans-serif;" class=" text-center">Visualiza, Edita, Agrega o Elimina Help Topics.</p>


                    </div>


                </div>
            </div>

</x-app-layout>