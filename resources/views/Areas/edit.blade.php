<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Editar usuario {{$area->nom_departamento}}
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
 
                <div class="card">
                    <form action="{{ route('Area.editform', $area->id) }}" method="POST" class="was-validated">
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
                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Nombre
                                </label>
                                <div class="col-lg-7 col-8">
                                    <input type="text" name="nom_departamento" class="form-control" value="{{$area->nom_departamento}}" required autofocus>
                                </div>
                            </div> 
                            <div class="row justify-content-around form-group">
                                <a href="{{ route('Areas.index') }}" class="col-8 col-sm-3 col-md-2 mt-1">
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
