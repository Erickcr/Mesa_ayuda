@auth
<nav x-data="{ open: false }" style="background:#1E3A8A;" class="border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('login') }}">
                        <img src="{{ asset('imagenes/Definitive_Blanco.png') }}" class="w-20 h-16" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div class=" sm:-my-px sm:flex">
                        <svg class="w-5 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <x-nav-link class="text-white {{ request()->segment(2) == 'admin' ? 'active' : '' }} "
                            href="{{ route('inicio') }}" :active="request()->routeIs('inicio')">
                            {{ __('Inicio') }}
                        </x-nav-link>
                    </div>
                    @if (Auth::user()->id_tipo_usuario == 4)
                    <div class="hidden text-white sm:flex sm:items-center sm:ml-6">
                        <x-jet-dropdown width="48">
                            <x-slot name="trigger">

                                <button
                                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div class="text-white">Administracion</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>

                            </x-slot>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <x-slot name="content">



                                <div class="border-b border-gray-100 hover:bg-gray-100  ">
                                    <a href="{{route('Administrador.Adminticket')}}"
                                        class="block px-4 py-2 text-xs text-black hover:no-underline">Tickets</a>
                                </div>

                                <div class="border-b border-gray-100 hover:bg-gray-100">
                                    <a href="{{route('Administrador.Usuarios')}}"
                                        class="block px-4 py-2 text-xs text-black hover:no-underline">Usuarios</a>
                                </div>

                                <div class="border-b border-gray-100 hover:bg-gray-100">
                                    <a href="{{route('historial')}}"
                                        class="block px-4 py-2 text-xs text-black hover:no-underline">Historial</a>
                                </div>

                                <div class="border-b border-gray-100 hover:bg-gray-100">
                                    <a href="{{route('AdminPreguntas.adminIndex')}}"
                                        class="block px-4 py-2 text-xs text-black hover:no-underline">Preguntas
                                        Frecuentes</a>
                                </div>

                                <div class="border-b border-gray-100 hover:bg-gray-100">
                                    <a href="{{route('Areas.index')}}"
                                        class="block px-4 py-2 text-xs text-black hover:no-underline">Areas</a>
                                </div>



                                <div class="hover:bg-gray-100 ">
                                    <a href="{{route('TipoAyuda.index')}}"
                                        class="block px-4 py-2 text-xs text-black hover:no-underline">Help Topics</a>
                                </div>



                            </x-slot>
                        </x-jet-dropdown>
                    </div>

                    @elseif(Auth::user()->id_tipo_usuario == 5)
                    <x-nav-link class="text-white" href="{{ route('JefeArea.JefeTicket') }}" :active="request()->routeIs('JefeArea.JefeTicket')">
                        {{ __('Nuevos tickets') }}
                    </x-nav-link>

                    <x-nav-link class="text-white" href="{{ route('Acerca_de') }}"
                        :active="request()->routeIs('Acerca_de')">
                        {{ __('Acerca de') }}
                    </x-nav-link>

                    @else


                    <x-nav-link class="text-white" href="{{ route('Acerca_de') }}"
                        :active="request()->routeIs('Acerca_de')">
                        {{ __('Acerca de') }}
                    </x-nav-link>
                    @endif
                </div>


            </div>


            <!-- Settings Dropdown -->
            <div class="hidden text-white sm:flex sm:items-center sm:ml-6">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                        @else
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div class="text-white">{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        @endif
                    </x-slot>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Administrar cuenta') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Perfil') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                            {{ __('Team Settings') }}
                        </x-jet-dropdown-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                            {{ __('Create New Team') }}
                        </x-jet-dropdown-link>
                        @endcan

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" />
                        @endforeach

                        <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">

            <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                <svg class="w-5 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg> {{ __('Inicio') }}
            </x-responsive-nav-link>
            @if (Auth::user()->id_tipo_usuario == 4)
            <x-responsive-nav-link  href="{{ route('Administrador.Adminticket') }}" :active="request()->routeIs('Administrador.Adminticket')">
                {{ __('Tickets') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link  href="{{ route('Administrador.Usuarios') }}" :active="request()->routeIs('Administrador.Usuarios')">
                {{ __('Usuarios') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link  href="{{ route('historial') }}" :active="request()->routeIs('historial')">
                {{ __('Historial') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link  href="{{ route('AdminPreguntas.adminIndex') }}" :active="request()->routeIs('AdminPreguntas.adminIndex')">
                {{ __('Preguntas Frecuentes') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link  href="{{ route('Areas.index') }}" :active="request()->routeIs('Areas.index')">
                {{ __('Areas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link  href="{{ route('TipoAyuda.index') }}" :active="request()->routeIs('TipoAyuda.index')">
                {{ __('Help Topics') }}
            </x-responsive-nav-link>
            
            @elseif(Auth::user()->id_tipo_usuario == 5)
            <x-responsive-nav-link class="text-white" href="" :active="request()->routeIs('Administrador.Adminticket')">
                {{ __('Nuevos tickets') }}
            </x-responsive-nav-link>

            

            @else
            <x-responsive-nav-link href="{{ route('Acerca_de') }}" :active="request()->routeIs('Acerca_de')">
                {{ __('Acerca de') }}
            </x-responsive-nav-link>
            @endif

           

        </div>


        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link class="text-white" href="{{ route('profile.show') }}"
                    :active="request()->routeIs('profile.show')">
                    {{ __('Perfil') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                    :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                        {{ __('Cerrar Sesion') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="border-t border-gray-200"></div>

                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                    :active="request()->routeIs('teams.show')">
                    {{ __('Team Settings') }}
                </x-jet-responsive-nav-link>

                <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                    :active="request()->routeIs('teams.create')">
                    {{ __('Create New Team') }}
                </x-jet-responsive-nav-link>

                <div class="border-t border-gray-200"></div>

                <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
@endauth