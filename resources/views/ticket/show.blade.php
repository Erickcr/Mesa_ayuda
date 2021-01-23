<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout.
        --}}
        Estado del ticket
    </x-slot>
    <div class="container mx-auto pt-3  ">
        <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6 ">
            <div class="border-solid border-4 border-light-blue-500 p-4 ">

                <div class="text-right text-xl mb-2 border-solid border-b-2 overflow-hidden">
                    <svg class="w-7 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                    </svg>
                    <label class="font-bold">Ticket No.</label><br>
                    <p># {{ $ticket->id }}</p><br>
                    @if ($ticket->estado == 'Atendido')
                    <div class="flex">
                        <P class="text-left text-green-500">Tu ticket ha sido atendido</P>
                        <div class="text-left animate-ping ml-2 mt-2 bg-green-500 rounded-full h-3 w-3  "></div>
                    </div>
                    @elseif($ticket->estado == 'Canalizado')
                    <div class="flex">
                        <P class="text-left text-orange-500">Tu ticket ha sido canalizado, por favor espere respuesta.</P>
                        <div class="text-left animate-ping ml-2 mt-2 bg-orange-500 rounded-full h-3 w-3  "></div>
                    </div>

                    @else
                    <div class="flex">
                        <P style="color:red" class="text-left">Tu ticket aún no ha sido atendido.</P>
                        <div class="text-left animate-ping ml-2 mt-2 bg-red-500 rounded-full h-3 w-3  "></div>
                    </div>
                    @endif
                </div>

                <div class="shadow-md p-2 mb-2 flex justify-items-end items-center">
                    <div
                        class="m-3 animate-pulse  rounded-full h-20 w-20 flex items-center justify-center bg-gradient-to-b from-blue-500 to-red-200 ">
                        <svg class="w-10 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                        </svg>

                    </div>
                    <div class="text-sm flex-1">
                        <p class="text-black leading-none font-bold text-lg ">{{ $user->name }} {{ $user->ap_paterno }}
                            {{ $user->ap_materno }}</p>
                        <p class="text-grey-dark"> {{ $ticket->created_at }} </p>
                    </div>
                    <div class="text-sm flex-1 text-right">
                        <p>{{ $user->email }}</p>
                    </div>

                </div>
                <div class="text-sm ">
                    <p class=" text-gray-400 leading-none text-sm ">Tema de ayuda</p>
                    <p class="text-black  font-bold  text-3xl"> {{ $help_topic->help_topic }} </p>
                </div>

                <br>

                <label class=" text-gray-400 leading-none text-sm ">Asunto </label><br>
                <div class="p-2  block bg-gray-200 rounded text-gray-700 select-none border-gray-400 border-2">
                     {{$ticket->asunto }} </div><br>
                    @if($ticket->estado == 'Atendido' || $ticket->estado == 'Canalizado')
                    <label class=" text-gray-400 leading-none text-sm ">Respuesta </label><br>
                    <div class="p-2 block bg-gray-200 rounded text-gray-700 border-gray-400 border-2"> 
                        {{ $ticket->respuesta }} </div><br>

                    @endif
                    
                    <div class="flex">
                        
                        {{ $ticket->file }}<a href="/storage/Archivos/{{ $ticket->file }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                      </a>
                    </div>
                <a href="{{ route('inicio') }}"
                    class="  flex border hover:no-underline justify-center border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">Volver</a>

            </div>
        </div>
    </div>
</x-app-layout>