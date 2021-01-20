@section('titulo', 'Inicio de sesión')
@guest
<x-guest-layout>
    <x-authentication-card>
    <x-slot name="logo2">
            <x-authentication-card-logo2-iniciosesion/>
    
        </x-slot>
        <x-slot name="logo">
            <x-authentication-card-logo-iniciosesion />
            <p class="text-4xl font-black">Iniciar Sesión</p>
            <h3 class="my-3">¿Aun no tienes cuenta? <a href="{{ route('register') }}" class="text-blue-400 hover:underline">Regístrate aquí</a> </h3>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Introduce tu correo electrónico" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"  placeholder="**************" required autocomplete="current-password" />
            </div>
 
            <div class="flex items-center mt-4">
                <x-jet-button class="justify-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-screen ">
                    {{ __('Iniciar Sesión') }}
                 </x-jet-button>
            </div>
            <div class="flex justify-items-center  mt-4">
                @if (Route::has('password.request'))
                <p>¿Olvidaste tu contraseña?
                 <a class=" text-sm text-blue-400 hover:underline" href="{{ route('password.request') }}">
                        {{ __(' Recuperala Aquí') }}
                    </a> </p>
                    
    
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
@endguest
 