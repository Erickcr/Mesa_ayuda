<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Editar Tipo de ayuda {{$tipoayuda->help_topic}}
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
 
                <div class="card">
                    <form action="{{ route('TipoAyuda.editform', $tipoayuda->id) }}" method="POST">
                        @csrf @method('PATCH')
                        <div class="card-header text-center">
                            MODIFICAR EL TIPO DE AYUDA <strong>{{$tipoayuda->help_topic}}</strong>
                        </div>

                            @if(session('success'))
                                <div class="alert alert-success">
                                {{session('success')}}
                                </div>
                            @endif

                        <div class="card-body">
                            <div class="row form-group text-center">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="help_topic" class="form-control col-md-9" value="{{$tipoayuda->help_topic}}">
                            </div>

                            <div class="row form-group text-center">
                                <label for="" class="col-2">Tipo de usuario</label>
                                <select name="id_tipo_usuario" class=" col-9 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    <option value="">Seleciona un tipo de usuario</option>
                                    @foreach ($tipousuario as $tipousuarios)
                                    <option value="{{$tipousuarios->id}}">{{$tipousuarios->tipo_usuario}}</option>
                                    @endforeach  
                                </select>   
                            </div>
                        
                            <div class="row form-group">
                                <button type="submit" class="btn btn-success col-4 offset-4">Modificar</button>

                            </div>

                            <a href="{{ route('TipoAyuda.index') }}">
                                <button type="button" class="btn btn-outline-danger">Volver</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
