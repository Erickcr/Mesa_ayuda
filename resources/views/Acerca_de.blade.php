<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Acerca de
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <img src="{{asset('imagenes/Defenitive.png')}}" alt="Cecyad" style="height:150px; weight:150px;  display: block;
  margin-left: auto;
  margin-right: auto;">
            <p style="text-align:center; font-weight:italic; font-size: 30px;">CECyaD</p>
            <p style="text-align:center; font-weight:bold; font-size: 30px;">Coordinación de Educación Continua y a Distancia.</p>
               
               <p style="text-align:center;"><strong>Coordinado por: M.A. Rocío Contreras Jiménez</strong></p>
               <br>

               <p style="text-align:center;"><strong>Plataforma educativa (Moodle)</strong></p>
               <a href="http://edistancia.morelia.tecnm.mx:81/moodle/">
               <p style="text-align:center;">http://edistancia.morelia.tecnm.mx:81/moodle/</p>
               </a>
               
               
            </div>
        </div>
    </div>
</x-app-layout>
