<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Agregar Nuevo Tipo de Ayuda
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Nuevo Tipo de ayuda</strong>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif

                    <div class="card-body">
                        <form  class="was-validated" method="POST" action="{{ route('TipoAyudaAgregada') }}">
                            @csrf
                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Nombre
                                </label>
                                <div class="col-lg-7 col-8">
                                    <input type="text" name="ayuda" class="form-control" value="" placeholder="Introducir el Nombre" required autofocus>
                                </div>
                            </div> 
                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Tipo de Usuario
                                </label>
                                <div class="col-lg-7 col-8">
                                    <select name="tipo_usuario" class="form-control col-12 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="">Seleciona un usuario</option>
                                        @foreach ($tipousuario as $tipousuario)
                                        <option value="{{$tipousuario->id}}">{{$tipousuario->tipo_usuario}}</option>
                                        @endforeach  
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content-around form-group">
                                <a href="{{ route('TipoAyuda.index') }}" class="col-8 col-sm-3 col-md-2 mt-1">
                                    <button type="button" class="btn btn-outline-danger col-12">Cancelar</button>
                                </a>
                                <button type="submit" class="btn btn-success  col-7 col-sm-3 col-md-2 mt-1">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>