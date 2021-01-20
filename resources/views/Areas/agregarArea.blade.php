<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Agregar Nueva Área
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="card-header text-center">
                    <strong>Nueva Área</strong>
                </div>

                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif

                <form method="POST" action="{{ route('AreaAgregada') }}">
                <br>
                    @csrf
                    <div class="row form-group text-center">
                        <label for="" class="col-2">Nombre</label>
                        <input type="text" name="area" class="form-control col-md-9" value="" placeholder="Introducir el Nombre" required autofocus>
                    </div> 
                     
                    <br>

                        <button type="submit" class="btn btn-success col-4 offset-4">Registrar</button> <br><br>

                        <a href="{{ route('Areas.index') }}">
                            <button type="button" class="btn btn-outline-danger">Volver</button>
                        </a>
                </form>
           
            </div>
        </div>
    </div>

</x-app-layout>
