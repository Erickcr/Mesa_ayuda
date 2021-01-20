<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}}</title> {{-- esto hara que en todos los componentes, y todo lo que herede de app, tengas que poner el slot tittle para decirle el titulo de esa pestania --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300;1,400;1,600&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link href="{{ asset('css/tablero.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body class=" antialiased" style="font-family: 'Open Sans', sans-serif;">
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-dropdown')

        
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <section id="footer" class=" shadow p-3 rounded" style="background:#1E3A8A; font-size: 13px;">
            <div class="container ">
                <div class="row  mb-2">
    
                    <div class="col-xs-4 col-sm-4 col-md-4 mt-4">
                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('imagenes/university.png')}}" width="25" height="25"
                                class="d-inline-block align-top" alt="logo" loading="lazy">
                            <p class="text-white ml-2 my-2">Campus I</p>
                            <p class="text-white ml-5">Avenida Tecnológico #1500 Col. Lomas de Santiaguito. Morelia, Mich.
                            </p>
    
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 mt-4">
                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('imagenes/university.png')}}" width="25" height="25"
                                class="d-inline-block align-top" alt="logo" loading="lazy">
                            <p class="text-white ml-2 my-2">Campus II</p>
                            <p class="text-white  ml-5">Camino de la Arboleda S/N Residencial San Jose de la Huerta Tenencia
                                Morelos. Morelia, Mich.</p>
    
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 mt-4 ">
                        <p class="text-white text-center ml-2 my-2">Contacto</p>
                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('imagenes/email.png')}}" width="20" height="20"
                                class="d-inline-block align-top" alt="logo" />
                            <h class="text-white">Difusion@itmorelia.edu.mx </h>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <img src="{{asset('imagenes/phone.png')}}" width="20" height="20"
                                class="d-inline-block align-top" alt="logo" />
                            <h class="text-white">Telefono: +52(443)31 21 570</h>
                        </div>
                    </div>
                </div>
    
                <div class="row mt-5">
                    <div class="col-xs-4 col-sm-4 col-md-4 mt-5 text-white text-center">
                        <p>Pagina creada AKEES 2020. </p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 jutify-center text-white">
                        <p class="text-white d-flex justify-content-center">Siguenos</p>
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3 mb-3 d-flex justify-content-center text-white "> <a
                                    href="https://www.facebook.com/ITMoreliaOficial/"><img
                                        src="{{asset('imagenes/facebook.png')}}" width="20" height="20" alt="logo" /></a>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 mb-3 d-flex justify-content-center text-white "><a
                                    href="https://instagram.com/tecnm_campus_morelia?igshid=3x8havg3a57s"> <img
                                        src="{{asset('imagenes/instagram.png')}}" width="20" height="20" alt="logo" /></a>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 mb-3 d-flex justify-content-center text-white "> <a
                                    href="https://twitter.com/itmoficial?s=11"><img src="{{asset('imagenes/twitter.png')}}"
                                        width="20" height="20" alt="logo" /></a></div>
                            <div class="col-xs-3 col-sm-3 col-md-3 mb-3 d-flex justify-content-center text-white"><a
                                    href="https://www.linkedin.com/mwlite/school/instituto-tecnol-gico-de-morelia"> <img
                                        src="{{asset('imagenes/linkedin.png')}}" width="20" height="20" alt="logo" /></a>
                            </div>
    
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </section>
    
    </div>

    @stack('modals')

    @livewireScripts

</body>

</html>