<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Preguntas Frecuentes
    </x-slot>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Nueva pregunta frecuente</strong>
                    </div>
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
                    <form class="was-validated" enctype="multipart/form-data" method="POST" action="{{ route('AdminPreguntas.añadirPreguntas') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1"
                                    >Pregunta
                                </label>
                                <div class="col-lg-7 col-8">
                                    <input type="text" name="pregunta" class="form-control" value="" placeholder="Introduce tu pregunta" required autofocus>
                                </div>
                            </div>

                            
                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Respuesta
                                </label>
                                <div class="col-lg-7 col-8">
                                    <textarea id="respuesta" class="form-control" type="text" name="respuesta" rows="5"  placeholder="Introduce la respuesta" required></textarea>
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Área
                                </label>
                                <div class="col-lg-7 col-8">
                                    <select name="departamento" class="form-control col-12 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="">Seleciona una área</option>
                                        @foreach ($departamento as $departamento)
                                        <option value="{{$departamento->id}}">{{$departamento->nom_departamento}}</option>
                                        @endforeach  
                                    </select>  
                                </div>  
                            </div>
                        
                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Archivo
                                </label>
                                <div class="col-lg-7 col-8">
                                    <input type="file" name="file" class="form-control ">
                                </div>
                            </div>

                            <div class="row justify-content-around form-group">
                                <a href="{{ route('AdminPreguntas.adminIndex') }}" class="col-8 col-sm-3 col-md-2 mt-1">
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