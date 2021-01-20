@extends('layouts.appnosesion')


@section('title', 'Respuesta')

@section('contenido')

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">

                <div class="container">
                    <div class="row mb-3">
                        <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-8"
                            src="{{ asset('imagenes/question.png') }}">
                        </p>
                    </div>

                    <div class="row mb-3">
                        <p class="col-md-12 h3 text-center">
                            <strong>Preguntas Frecuentes </strong>
                        </p>
                    </div>

                    <hr>
                    @foreach ($preguntas as $pregunta)
                        <div class="row mb-3">
                            <p class="col-md-12 h4 font-bold">
                                Pregunta
                            </p>
                            <p class="col-md-12 h5" id="parrafo-pf">
                                {{ $pregunta->pregunta }}
                            </p>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <p class="col-md-12 h4 font-bold">
                                Respuesta
                            </p>
                            <p class="col-md-12 h5" id="parrafo-pf">
                                {{ $pregunta->respuesta }}
                            </p>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <p class="col-md-12 h4 font-bold">
                                Archivo Adjunto
                            </p>
                            @if($pregunta->file == "")
                                <p class="col-md-12 h5" id="parrafo-pf">
                                    No disponible para esta respueta.
                                </p>
                            @else
                                <p class="col">
                                    <a href="/storage/Archivos/{{ $pregunta->file }}" class="btn btn-primary py-2"
                                    role="button">
                                    Descarga Ahora</a>
                                </p>
                            @endif
                        </div>

                    @endforeach
                    <hr>
                </div>

                <br>
                <a href="{{ route('preguntasfrecuentes.index') }}" class="btn btn-outline-secondary py-2"
                    role="button">Regresar</a>
            </div>
        </div>
    </div>



@endsection
