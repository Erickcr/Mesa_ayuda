@extends('layouts.appnosesion')


@section('title', 'Inicio')

@section('contenido')

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        var cont = 0;

        function loopSlider() {
            var xx = setInterval(function() {
                switch (cont) {
                    case 0: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        cont = 1;
                        break;
                    }
                    case 1: {
                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");
                        cont = 0;
                        break;
                    }
                }
            }, 8000);
        }

        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }

        function sliderButton1() {
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 0
        }

        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 1
        }
        $(window).ready(function() {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");
            loopSlider();
        });

    </script>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">

                <div class="container">
                    <div class="text-center">
                        <p class="h4 justify-content-center"><strong>Coordinación de Educación Continua y a
                                Distancia</strong></p>
                        <p class="h4 justify-content-center">Instituto Tecnólogico de Morelia</p>
                        <br>
                    </div>

                    <!-- <h2>COORDINACIÓN DE EDUCACIÓN CONTINUA Y A DISTANCIA </h2>
                            <h3> INSTITUTO TECNÓLOGICO DE MORELIA</h3>
                            <br>
                            <h1><strong>¡Bienvenidos a la mesa de servicio del ITM!</strong></h1>
                            <br> -->
                    <div class="sliderAx h-auto">
                        <div id="slider-1" class="container mx-auto">
                            <img src="{{ asset('imagenes/Anuncios/anuncio1.jpeg') }}">
                            <div class="md:w-1/2">
                            </div>
                        </div> <!-- container -->
                        <br>
                    </div>
                    <div id="slider-2" class="container mx-auto">
                        <img src="{{ asset('imagenes/Anuncios/anuncio2.jpeg') }}">
                        <!-- container -->
                        <br>
                    </div>

                </div>
                <div class="flex justify-between w-12 mx-auto pb-2">
                    <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 "></button>
                    <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
                </div>
                <br>
                <div class="text-center">
                    <p class="h5 justify-content-center"><strong>¡Bienvenidos a la mesa de servicio del
                            ITM!</strong></p>
                    <br>
                </div>
                <div class="shadow-lg p-5 mt-5 text-white rounded" style="background:#1E3A8A;">
                    <div class="row">


                        <img width="100" height="100" class=" mx-auto md:mx-0 md:mr-8"
                            src="{{ asset('imagenes/customer-service.png') }}">
                        <div class="col-md-10">
                            <div class="row">
                                <p class="col-md-10 h3 text-center"> <strong>¿Qué es una mesa de servicio? </strong>
                                </p>
                            </div>
                            <div class="row">
                                <p class="col-md-12 text-justify">La Mesa de servicio ofrece respuestas y soluciones
                                    acerca de soporte técnico, entre otras cuestiones relacionadas con la
                                    utilización de sistemas informáticos. En nuestro caso, esta mesa esta pensada en
                                    los alumnos de escolaridad a distancia del ITM.</p>
                            </div>
                        </div>


                    </div>
                </div>
                <p class="mt-5 d-flex  h3 justify-content-center"><strong>¿Qué ofrece esta mesa de
                        servicio?</strong></p>
                <br>

                <div class="row mb-5">


                    <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-8"
                        src="{{ asset('imagenes/question.png') }}">
                    <div class="col-md-10">
                        <div class="row ">
                            <p class="col-md-12 h5  xl:text-left md:text-left sm:text-center lg:text-left ">
                                <strong>Preguntas Frecuentes</strong>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-md-5 ">Puedes visualizar las preguntas frecuentes hechas por otros
                                usuario, dando <a href="{{ route('preguntasfrecuentes.index') }}"
                                    :active="request()->routeIs('preguntasfrecuentes.index')">click aquí.</a> </p>
                        </div>
                    </div>


                </div>
                <div class="row mb-5">
                    <div class="col-md-10">
                        <div class="row ">
                            <p class="col-md-12 h5 xl:text-right md:text-right sm:text-center lg:text-right">
                                <strong>Levanta Tickets</strong>
                            </p>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <p class="col-md-5">Si no encuentras información en las preguntas frecuentes, puedes
                                levantar un ticket, para eso tienes que <a href="{{ route('login') }}"
                                    :active="request()->routeIs('login')">Iniciar sesión.</a></p>
                        </div>
                    </div>
                    <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-8"
                        src="{{ asset('imagenes/ticket.png') }}">

                </div>
                <div class="row mb-5">

                    <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-8"
                        src="{{ asset('imagenes/project.png') }}">
                    <div class="col-md-10">
                        <div class="row ">
                            <p class="col-md-12 h5 xl:text-left md:text-left sm:text-center lg:text-left">
                                <strong>Verifica el estado de tu Ticket</strong>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col-md-5">Una vez que hayas levantado tu ticket, podrás verificar su estado,
                                si esta pendiente o ya esta resuelto. </p>
                        </div>
                    </div>


                </div>

                <div class="row d-flex justify-content-around p-5" style="background:#93C5FD;">

                    <img style=" height: 150px;" class=" mx-auto md:mx-0 md:mr-8"
                        src="{{ asset('imagenes/LOGOS 2020/ITM Oficial.png') }}">

                    <img style=" height: 150px;" class=" mx-auto md:mx-0 md:mr-8"
                        src="{{ asset('imagenes/LOGOS 2020/ITM ANFEI.png') }}">

                    <img style=" height: 150px;" class=" mx-auto md:mx-0 md:mr-8"
                        src="{{ asset('imagenes/LOGOS 2020/logo.png') }}">
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <p class="col-md-12 h4 text-center mt-5"> <strong> ¿Quiénes pueden usar esta mesa de
                                    servicio? </strong></p>
                        </div>
                        <div class="row">
                            <p class="col-md-12 text-center">Todos los alumnos y docentes del ITM de escolaridad a
                                distancia.</p>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
