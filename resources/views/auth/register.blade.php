@section('titulo', 'Registro')

<x-guest-layout>
    

    
    <x-authentication-card>
        
        <x-slot name="logo2">
            <x-authentication-card-logo2-registro />
    
        </x-slot>

            <x-slot name="logo">
                <x-authentication-card-logo-registro />
                <p class="text-4xl font-black">REGISTRATE</p>
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        placeholder="Nombre" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="apellidos" value="{{ __('Apellidos') }}" />
                    <x-jet-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos"
                        :value="old('apellidos')" placeholder="Apellidos" required autofocus autocomplete="apellidos" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Correo Electronico') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        placeholder="Correo Electrónico" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                        placeholder="*********" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" placeholder="*********" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="id_tipo_usuario" value="{{ __('Tipo Usuario') }}" />
                    <select name="id_tipo_usuario" class="block mt-1 w-full" required>
                    <option value="">Selecciona Una Opción...</option>
                       @foreach ($usuario as $user)
                        <option value="{{$user->id}}">{{$user->tipo_usuario}}</option>
                       @endforeach
                    </select>

                <div class="flex items-center mt-4">

                    <x-jet-button
                        class="justify-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-screen">
                        {{ __('Registrate') }}
                    </x-jet-button>
                </div>

                <div class="flex  mt-4">
                    <a class="underline w-screen text-center text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('login') }}">
                        {{ __('¿Ya estas registrado?') }}
                    </a>


                </div>
            </form>


    </x-authentication-card>
</x-guest-layout>