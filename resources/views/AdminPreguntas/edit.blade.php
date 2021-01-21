<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Editar Pregunta {{$pregunta->pregunta}}
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="card">

                    <form action="{{ route('AdminPreguntas.editform', $pregunta->id) }}" method="POST" class="was-validated">
                        @csrf @method('PATCH')
                        <div class="card-header text-center">
                            Modificar pregunta frecuente <strong>{{$pregunta->pregunta}}</strong>
                        </div>

                            @if(session('success'))
                                <div class="alert alert-success">
                                {{session('success')}}
                                </div>
                            @endif

                        <div class="card-body">
                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Pregunta
                                </label>
                                <div class="col-lg-7 col-8">
                                    <input type="text" name="pregunta" class="form-control" value="{{$pregunta->pregunta}}">
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Respuesta
                                </label>
                                <div class="col-lg-7 col-8">
                                    <textarea id="respuesta" class="form-control" type="text" name="respuesta" rows="5"  placeholder="Introduce la respuesta" required>{{$pregunta->respuesta}}</textarea>
                                </div>
                            </div>

                            <div class="row justify-content-center form-group">
                                <label for="" class="col-12 col-lg-2 text-center mt-1">
                                    Área
                                </label>
                                <div class="col-lg-7 col-8">
                                    <select name="id_departamento" class="form-control col-12 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                        <option value="">Seleciona un Área</option>
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
