<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Agregar Nuevo Tipo de Ayuda
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="card-header text-center">
                    <strong>Nuevo Tipo de ayuda</strong>
                </div>

                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif

                <form method="POST" action="{{ route('TipoAyudaAgregada') }}">
                <br>
                    @csrf
                    <div class="row form-group text-center">
                        <label for="" class="col-2">Nombre</label>
                        <input type="text" name="ayuda" class="form-control col-md-9" value="" placeholder="Introducir el Nombre" required autofocus>
                    </div> 
<br>
                    <div class="row form-group text-center">
                         <label for="" class="col-2">Tipo de Usuario</label>
                                <select name="tipo_usuario" class=" col-9 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    <option value="">Seleciona un usuario</option>
                                    @foreach ($tipousuario as $tipousuario)
                                    <option value="{{$tipousuario->id}}">{{$tipousuario->tipo_usuario}}</option>
                                    @endforeach  
                                </select>    
                    </div>

                    <br>


                        <button type="submit" class="btn btn-success col-4 offset-4">Registrar</button> <br><br>

                        <a href="{{ route('TipoAyuda.index') }}">
                            <button type="button" class="btn btn-outline-danger">Volver</button>
                        </a>
                </form>
           
            </div>
        </div>
    </div>

</x-app-layout>