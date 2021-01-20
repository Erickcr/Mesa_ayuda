<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Editar usuario {{$area->nom_departamento}}
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
 
                <div class="card">
                    <form action="{{ route('Area.editform', $area->id) }}" method="POST">
                        @csrf @method('PATCH')
                        <div class="card-header text-center">
                            MODIFICAR EL ÁREA <strong>{{$area->nom_departamento}}</strong>
                        </div>

                            @if(session('success'))
                                <div class="alert alert-success">
                                {{session('success')}}
                                </div>
                            @endif

                        <div class="card-body">
                            <div class="row form-group text-center">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="nom_departamento" class="form-control col-md-9" value="{{$area->nom_departamento}}">
                            </div>
                        
                            <div class="row form-group">
                                <button type="submit" class="btn btn-success col-4 offset-4">Modificar</button>

                            </div>

                            <a href="{{ route('Areas.index') }}">
                                <button type="button" class="btn btn-outline-danger">Volver</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
