<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout.
        --}}
        Estado del Ticket
    </x-slot>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg  ">


                <p style="text-align:center; font-weight:italic; font-size: 30px;">Tus tickets
                </p>
                <div class="p-4 items-center justify-center">

                    <div class=" rounded-full h-8 w-8 inline-block  bg-red-300 "> </div> 
                    <div class="rounded-full h-8 w-8 inline-block bg-orange-300"></div>
                    <div class="rounded-full h-8 w-8 inline-block  bg-green-300"></div>
                   

                </div>
                 
                <!-- component -->
        <div class="container my-12 mx-auto px-4 md:p-42">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                
               
                        
                    @foreach($tickets as $ticket)
                         <!-- Column -->
                         <div class="my-1 p-4 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                            <!-- Article -->
                            <article class=" p-3 overflow-hidden rounded-lg shadow-lg {{ $ticket->estado == 'Atendido' ? 'bg-green-300 hover:bg-green-500 animate-pulse' : ($ticket->estado == 'Pendiente' ? 'bg-red-300 hover:bg-red-500' : ($ticket->estado == 'Canalizado' ? 'bg-orange-300 hover:bg-orange-500' : '' ) )}} ">
                                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                    <h1 class="text-lg">
                                        <a class="no-underline  text-black hover:no-underline" href="{{ route('ticket.mostrar',  $ticket->id ) }}">
                                           N. Ticket {{ $ticket->id }}
                                        </a>
                                    </h1>
                                    <p class="text-grey-darker text-sm">
                                        {{ $ticket->created_at }}
                                    </p>
                                </header>

                            
                            </article>
                            <!-- END Article -->

                        </div>
                        <!-- END Column -->

                    @endforeach 
                    
                    </div>
                </div>
                <a href="{{ route('inicio') }}"
                    class="border hover:no-underline  border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">Volver</a>
            </div>
        </div>
    </div>
</x-app-layout>
