@extends('layouts.appnosesion')


@section('title', 'Preguntas Frecuentes')

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
                            Selecciona el área para visualizar las preguntas
                        </p>
                    </div>

                    <hr>
                    <div class="row">
                        @foreach ($preguntas1 as $pregunta)
                            <!-- <div class="col-ms-4 col-lg-6 col-md-12 mb-4">
                                    <buttton type ="submit" class= "col" id="btn-depart">
                                        <a href="{{ route('preguntasfrecuentes.show', $pregunta) }}" class=" btn btn-primary col-md-7 text-white font-bold py-4 px-1 rounded-full" id="btn-ref">
                                            {{ $pregunta->nom_departamento }}
                                        </a>
                                    </buttton>
                                </div> -->
                            <div class="col-ms-4 col-lg-6 col-md-12 py-2">
                                <a href="{{ route('preguntasfrecuentes.show', $pregunta) }}" type="submit"
                                    class="col-md-12 text-black font-bold py-2 rounded" id="seleccionar2">
                                    <div class="row justify-content-center">
                                        <p class="col-md-12 py-3 =text-center" id="parrafo-pf">
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

@endsection
