<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Inicio
    </x-slot>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">

            <p style="text-align:center; font-weight:italic; font-size: 30px;">¡Bienvenido de nuevo <strong>{{$user->name}} {{$user->ap_paterno}}</strong>!</p>
                <p style="text-align:center; font-weight:bold; font-size: 30px;">Hay nuevos tickets esperando por ti.</p>
                <br>
                <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                    <div>
                    <a href="{{ route('JefeArea.JefeTicket') }}">
                            <img style=" height: 80px;" class=" mx-auto md:mx-0 md:mr-8"
                                src="{{asset('imagenes/ticket.png')}}">
                            <br>
                            
                            <h2 style="text-align:center; font-weight:bold;">Nuevos Tickets</h2>
                        </a>
                        <p style="font-family: 'Montserrat', sans-serif;text-align:center;">Verifica si tienes nuevos tickets.</p>
                    </div>
               


                </div>
            </div>
        </div>

</x-app-layout>