<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Preguntas Frecuentes
    </x-slot>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form enctype="multipart/form-data" method="POST" action="{{ route('AdminPreguntas.añadirPreguntas') }}">
                    @csrf
                    <div class="row form-group text-center">
                        <label for="" class="col-md-2 col-sm-12">Pregunta</label>
                        <input type="text" name="pregunta" class="form-control col-md-9 col-sm-12" value="" placeholder="Introduce tu pregunta" required autofocus>
                    </div>
                    <div class="row form-group text-center">
                        <label for="" class="col-md-2 col-sm-12">Respuesta</label>
                        <textarea id="respuesta" class="form-control col-md-9 col-sm-12" type="text" name="respuesta" rows="5"  placeholder="Introduce la respuesta" required></textarea>
                    </div>
                    <div class="row form-group text-center">
                         <label for="" class="col-2">Área</label>
                                <select name="departamento" class=" col-9 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                    <option value="">Seleciona un Área</option>
                                    @foreach ($departamento as $departamento)
                                    <option value="{{$departamento->id}}">{{$departamento->nom_departamento}}</option>
                                    @endforeach  
                                </select>    
                    </div>
                   
                    <div class="mt-4">
                        <input type="file" name="file" class="form-control ">
                    </div>
                        <br>
                    <div class="row form-group">
                        <button type="submit" class="btn btn-success col-4 offset-4">Agregar</button>
                    </div>
                    <a href="{{ route('AdminPreguntas.adminIndex') }}">
                        <button type="button" class="btn btn-outline-danger ">Volver</button>
                    </a>
                    
        
                </form>
            </div>
        </div>
    </div>
</x-app-layout>