
<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
      Departamentos
    </x-slot>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
            <div class="container">
                    
                    <div class="row mb-3">
                        <p class="col-md-12 h3 text-center">
                            <strong>Tickets Canalizados</strong>
                        </p>
                    </div>

                   
                        <p class="col-md-12 h4 text-center">
                            ¡Por favor, selecciona tu área para visualizar las preguntas canalizadas!
                        </p>
                    

                    <hr>
                    <div style="width:100%; float: right;padding:4px;">
                        @foreach ($preguntas1 as $pregunta)
                            <div class="card text-white bg-info mb-3">
                                <a href="{{ route('JefeArea.JefeView', $pregunta) }}" type="submit"
                                    id="seleccionar2">
                                    <div class="row justify-content-center">
                                        <p>
                                            {{ $pregunta->nom_departamento }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <br>
                    <a href="{{ route('dashboard') }}">
                        <button type="button" class="btn btn-outline-danger">Regresar</button>
                    </a>
                
                    </div>
            </div>
        </div>
    </div>

</x-app-layout>
