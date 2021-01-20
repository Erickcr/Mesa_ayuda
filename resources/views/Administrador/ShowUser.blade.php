<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Mostrar a {{$user->name}}
    </x-slot>
    
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="card">
                    <div class="card-header text-center">INFORMACIÓN DEL USUARIO
                        <strong>{{$user->name}}</strong>
                    </div>

                    <form action="{{ route('show', $user->id) }}" method="GET">
                        @csrf @method('PATCH')
                        <div class="card-body">

                            <div class="row justify-content-center form-group">
                                <label for="disabledTextInput" class="col-12 col-lg-2 text-center mt-1">
                                    Id
                                </label>

                                <div class="col-lg-7 col-8">
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->id }}">
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="disabledTextInput" class="col-12 col-lg-2 text-center mt-1">
                                    Nombre completo
                                </label>

                                <div class="col-lg-3 col-8 my-1">
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$user->name}}">
                                </div>
                            
                                <div class="col-lg-4 col-8 my-1">
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->apellidos }}">
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="disabledTextInput" class="col-12 col-lg-2 text-center mt-1">
                                    Correo electrónico
                                </label>

                                <div class="col-lg-7 col-8">
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="disabledTextInput" class="col-12 col-lg-2 text-center mt-1">
                                    Fecha de creación
                                </label>

                                <div class="col-lg-7 col-8">
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->created_at }}">
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="disabledTextInput" class="col-12 col-lg-2 text-center mt-1">
                                    Fecha de modificación
                                </label>

                                <div class="col-lg-7 col-8">
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->updated_at }}">
                                </div>
                            </div>

                            <div class="row justify-content-around form-group">
                                <a href="{{ route('JefeArea.JefeUsuarios') }}" class="col-8 col-sm-3 col-md-2 mt-1">
                                    <button type="button" class="btn btn-outline-danger col-12">Regresar</button>
                                </a>
                                <a href="{{ route('edit', $user->id) }}" class="col-8 col-sm-3 col-md-2 mt-1">
                                    <button type="button" class="btn btn-warning col-12">Editar</button>
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
