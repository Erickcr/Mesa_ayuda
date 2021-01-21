<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Editar usuario {{$user->name}}
    </x-slot>
    
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="card">
                    <div class="card-header text-center">MODIFICAR AL USUARIO 
                        <strong>{{$user->name}}</strong>
                    </div>

                    @if(session('usuariomodificado'))
                        <div class="alert alert-success">
                            {{session('usuariomodificado')}}
                        </div>
                    @endif

                    <form action="{{ route('editform', $user->id) }}" method="POST" class="was-validated">
                        @csrf @method('PATCH')
                        <div class="card-body">
                            <div class="row justify-content-center form-group">
                                <label for="name" class="col-12 col-lg-2 text-center mt-1">
                                    Nombre completo
                                </label>

                                <div class="col-lg-3 col-8 my-1">
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Introduce el nombre" required autofocus>
                                </div>
                            
                                <div class="col-lg-4 col-8 my-1">
                                    <input type="text" id="apellidos" name="apellidos" class="form-control" value="{{ $user->apellidos }}" placeholder="Introduce los apellidos" required>
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="email" class="col-12 col-lg-2 text-center mt-1">
                                    Correo eletrónico
                                </label>

                                <div class="col-lg-7 col-8">
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Introduce el correo electrónico" required>
                                </div>
                            </div>

                            <div class="row justify-content-around form-group">
                                <a href="{{ route('Administrador.Usuarios') }}" class="col-8 col-sm-3 col-md-2 mt-1">
                                    <button type="button" class="btn btn-outline-danger col-12">Cancelar</button>
                                </a>
                                <button type="submit" class="btn btn-success  col-7 col-sm-3 col-md-2 mt-1">Modificar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
