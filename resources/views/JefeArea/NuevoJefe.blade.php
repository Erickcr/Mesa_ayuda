<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Agregar Nuevo Usuario
    </x-slot>
    
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Nuevo Jefe Área</strong>
                    </div>

                    @if(session('usuarioGuardado'))
                        <div class="alert alert-success">
                            {{session('usuarioGuardado')}}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('agregadojefe') }}" class="was-validated">
                        @csrf
                        <div class="card-body">
                            <div class="row justify-content-center form-group">
                                <label for="name" class="col-12 col-lg-2 text-center mt-1">
                                    Nombre completo
                                </label>

                                <div class="col-lg-3 col-8 my-1">
                                    <input type="text" name="name" class="form-control" placeholder="Introduce el nombre" required autofocus>
                                </div>
                            
                                <div class="col-lg-4 col-8 my-1">
                                    <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Introduce los apellidos" required>
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="email" class="col-12 col-lg-2 text-center mt-1">
                                    Correo eletrónico
                                </label>

                                <div class="col-lg-7 col-8">
                                    <input type="email" name="email" class="form-control" placeholder="Introduce el correo electrónico" required>
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="password" class="col-12 col-lg-2 text-center mt-1">
                                    Contraseña
                                </label>

                                <div class="col-lg-7 col-8">
                                    <input type="password" name="password" class="form-control" placeholder="Introduce la contraseña" required>
                                    <small>La contraseña que proporciones es temporal y deberá ser cambiada cuando el usuario ingrese por primera vez.</small>
                                </div>
                            </div>

                            <div class="row justify-content-around form-group">
                                <a href="{{ route('JefeArea.JefeUsuarios') }}" class="col-8 col-sm-3 col-md-2 mt-1">
                                    <button type="button" class="btn btn-outline-danger col-12">Cancelar</button>
                                </a>
                                <button type="submit" class="btn btn-success  col-7 col-sm-3 col-md-2 mt-1">Guardar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

