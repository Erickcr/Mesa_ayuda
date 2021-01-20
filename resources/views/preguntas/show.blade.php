@extends('layouts.appnosesion')


@section('title', $pregunta->nom_departamento)

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

                    <div class="row mb-3">
                        <p class="col-md-12 h4 text-center">
                            {{ $pregunta->nom_departamento }}
                        </p>
                    </div>

                    <hr>

                    <div class="row">
                        @foreach ($pregunta1 as $pregunta)
                            <div class="col-ms-4 col-lg-6 col-md-12 py-2">
                                <a href="{{ route('preguntasfrecuentes.show2', $pregunta) }}" type="submit"
                                    class=" col-md-12 text-black font-bold py-2 rounded" id="seleccionar2">
                                    <div class="row justify-content-center">
                                        <img class="h-16 w-16 md:h-20 md:w-20 md:mx-0"
                                            src="{{ asset('imagenes/preguntas_frecuentes/pregunta.png') }}" alt="">
                                        <p class="col-md-9 py-3 text-justify" id="parrafo-pf">
                                            {{ $pregunta->pregunta }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <br>
                    <a href="{{ route('preguntasfrecuentes.index') }}" class="btn btn-outline-secondary py-2"
                        role="button">Regresar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
