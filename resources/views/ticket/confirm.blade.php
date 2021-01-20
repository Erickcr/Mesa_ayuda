<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout.
        --}}
        Confirmacion
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
                    <p># {{ $ticket->id }}</p></br>
                </div>

                <div class=" flex justify-items-end items-center">
                    <div class="m-3 animate-pulse  rounded-full h-20 w-20 flex items-center justify-center bg-gradient-to-b from-blue-500 to-red-200 ">
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
                <div class="p-2  block bg-gray-200 rounded text-gray-700 select-none border-gray-400 border-2"> {{ $ticket->asunto }} </div><br>
                <div class="flex justify-end">
                    <a href="{{ route('inicio') }}"
                    class="border hover:no-underline  border-green-500 bg-green-500 text-white rounded-md px-4 py-2  transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline justify-end">Aceptar</a>

                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>