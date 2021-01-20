<x-app-layout>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">

                <div class="container">
                    <div class="row mb-5">
                            <p class="col-md-12 h3 text-center"> 
                                <strong>¿Qué deseas hacer? </strong>
                            </p>
                    </div>
                    <!-- Levanta Tickets -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="row">
                                <p class="col-md-12 h5 xl:text-center md:text-center sm:text-center lg:text-center">
                                    <strong>Levanta Tickets</strong>
                                </p>
                            </div>
                            <a href="{{ route('ticket.create') }}" id="subraya">
                                <div class="row col-ms-4 col-lg-8 col-md-8 d-flex justify-content-center mx-auto py-2 rounded" id="seleccionar">
                                    <img class="h-16 w-16 md:h-24 md:w-24 rounded-full md:mx-0 md:mr-8" src="{{asset('imagenes/ticket.png')}}">
                                    <p class="col-md-6">
                                        Si no encuentras información en las preguntas frecuentes, puedes
                                        levantar un ticket,para eso tienes que iniciar sesión. 
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Verifica el estado de tu Ticket -->

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="row">
                                <p class="col-md-12 h5 xl:text-center md:text-center sm:text-center lg:text-center">
                                    <strong>Verifica el estado de tu Ticket</strong>
                                </p>
                            </div>
                            <a href="{{ route('ticket.index') }}" id="subraya">
                                <div class="row col-ms-4 col-lg-8 col-md-8 d-flex justify-content-center mx-auto py-2 rounded" id="seleccionar">
                                    <img class="h-16 w-16 md:h-24 md:w-24 rounded-full md:mx-0 md:mr-8" src="{{asset('imagenes/project.png')}}">   
                                    <p class="col-md-6">Una vez que hayas levantado tu ticket, podrás verificar su estado,
                                        si esta pendiente o ya esta resuelto. </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout> 