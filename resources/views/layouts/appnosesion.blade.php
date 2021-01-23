<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous">
    </script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300;1,400;1,600&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link href="{{ asset('css/tablero.css') }}" rel="stylesheet">
        <link href="{{ asset('css/preguntas_frecuentes.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body class=" antialiased" style="font-family: 'Open Sans', sans-serif;">
    <div class="min-h-screen bg-gray-100">
    <!--______________________________________________________________________--> 
    <!--|---------------------------DESAROLLADORES --------------------------|--> 
    
    <!--|---------------------------Sergio Regalado--------------------------|-->

    <!--|---------------------------Erick Castruita--------------------------|-->
    
    <!--|---------------------------Alexis Roman-----------------------------|-->
    
    <!--|---------------------------Ealeen Montaño---------------------------|-->
    
    <!--|---------------------------Karen Gutierrez--------------------------|-->
    <!--______________________________________________________________________-->
        <nav x-data="{ open: false }" style="background:#1E3A8A;" class="border-b border-gray-100">
        <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                <div class="flex justify-between h-20">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}">
                                <img src="{{asset('imagenes/Definitive_Blanco.png')}}" class="w-20 h-16" />
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <div class=" sm:-my-px sm:flex">
                                <svg class="w-5 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                  </svg>
                                <x-nav-link class="text-white"  href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                    {{ __('Inicio') }}
                                </x-nav-link>
                            </div>
               
                            <x-nav-link class="text-white"  href="{{ route('preguntasfrecuentes.index') }}" :active="request()->routeIs('preguntasfrecuentes.index')">
                                {{ __('Preguntas Frecuentes') }}
                            </x-nav-link>

                        </div>
                    </div>
                   
                     <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <div class=" sm:-my-px sm:flex">
                            <svg class="w-5 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                              </svg>
                              <x-nav-link class="text-white float-right"  href="{{ route('login') }}" :active="request()->routeIs('login')">
                                {{ __('Iniciar Sesión')}}
                            </x-nav-link>
                        </div>

                        <x-nav-link class="text-white float-right"  href="{{ route('register') }}" :active="request()->routeIs('register')">
                            {{ __('Registrarme') }}
                        </x-nav-link>
                    </div> 
                    
                        
                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                </div>
            </div>
                    <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link   href="{{ route('dashboard') }}"  :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link   href="{{ route('preguntasfrecuentes.index') }}" :active="request()->routeIs('preguntasfrecuentes.index')">
                        {{ __('Preguntas Frecuentes') }}
                    </x-responsive-nav-link>
            
                    <x-responsive-nav-link   href="{{ route('login') }}" :active="request()->routeIs('login')">
                        {{ __('Iniciar Sesión') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link   class="text-white float-right"  href="{{ route('register') }}" :active="request()->routeIs('register')">
                        {{ __('Registrarme') }}
                    </x-responsive-nav-link>
                </div>
            </div>
        </nav>
        
        <!-- Page Content -->
        @yield('contenido')

        <br>
        <div style="text-align:center;">
             
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ver Información de los desarrolladores
        </button>
        </div>
        <br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informacion de los programadores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card border-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Programador</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">Karen Gutierrez</h5>
    <p class="card-text">Estudiante de Ingeniería en Tecnologías de la Información.</p>
    <p>https://www.facebook.com/janethe.campos</p>
  </div>
</div>
<div class="card border-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Programador</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">Ealeen Montaño</h5>
    <p class="card-text">Estudiante de Ingeniería en Tecnologías de la Información.</p>
    <p>https://www.facebook.com/jazminealeen.montanocorrea</p>
  </div>
</div>
<div class="card border-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Programador</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">Alexis Roman</h5>
    <p class="card-text">Estudiante de Ingeniería en Sistemas Computacionales.</p>
    <p>https://www.facebook.com/Alexisromann</p>
  </div>
</div>
<div class="card border-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Programador</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">Erick Castruita</h5>
    <p class="card-text">Estudiante de Ingeniería en Tecnologías de la Información.</p>
    <p>https://www.facebook.com/erick.castruita.3</p>
  </div>
</div>
<div class="card border-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Programador</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">Sergio Regalado</h5>
    <p class="card-text">Estudiante de Ingeniería en Tecnologías de la Información.</p>
    <p>https://www.facebook.com/yeyoregalado/</p>
    <p></p> 
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


        <!-- footer -->
        <section id="footer" class=" shadow p-3 rounded" style="background:#1E3A8A; font-size: 13px;">
            <div class="container ">
                <div class="row  mb-2">
    
                    <div class="col-xs-4 col-sm-4 col-md-4 mt-4">
                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('imagenes/university.png')}}" width="25" height="25"
                                class="d-inline-block align-top" alt="logo" loading="lazy">
                            <p class="text-white ml-2 my-2">Campus I</p>
                            <p class="text-white ml-5">Avenida Tecnológico #1500 Col. Lomas de Santiaguito. Morelia, Michoacán.
                            </p>
    
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 mt-4">
                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('imagenes/university.png')}}" width="25" height="25"
                                class="d-inline-block align-top" alt="logo" loading="lazy">
                            <p class="text-white ml-2 my-2">Campus II</p>
                            <p class="text-white  ml-5">Camino de la Arboleda S/N Residencial San Jose de la Huerta Tenencia
                                Morelos. Morelia, Michoacán.</p>
    
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
                        <p> Pagina creada AKEES 2020. </p>
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
</body>

</html>