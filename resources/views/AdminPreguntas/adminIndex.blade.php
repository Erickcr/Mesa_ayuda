<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Preguntas Frecuentes
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="container col-md-8 col-md-offset-2">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Preguntas Frecuentes</strong>
                        </div> <br>

                        <a href="{{route ('AdminPreguntas.añadirPreguntas')}}">
                            <button type="button" class="btn btn-success">Nueva Pregunta</button><br>
                        </a> <br>

                        @if ($pregunta->isEmpty())
                            <div>
                                <p style="color:red">No hay preguntas</p>
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Pregunta</th>
                                            <th scope="col">Respuesta</th>
                                            <th scope="col">Departamento</th>
                                            <th scope="col">Archivo</th>
                                            <th scope="col">Fecha de Creación</th>
                                            <th scope="col">Fecha de Modificación</th>
                                            <th scope="col" id="accion">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pregunta as $preguntas)
                                            <tr>
                                                <td>{!! $preguntas->id !!}</td>
                                                <td>{!! substr($preguntas->pregunta, 0, 18).'...' !!}</td>
                                                <td>{!! substr($preguntas->respuesta, 0,  18).'...' !!}</td>
                                                <td>{!! $preguntas->nom_departamento !!}</td>
                                                @if ($preguntas->file == "")
                                                <td>No</td>
                                                @else
                                                <td>Si</td>
                                                @endif
                                                <td>{!! $preguntas->created_at !!}</td>
                                                <td>{!! $preguntas->updated_at !!}</td>
                                                <td>
                                                    <div class="dropdown text-center">
                                                        <button class="btn" id="dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{asset('imagenes/menu.png')}}" width="25px" height="25px">
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{route ('AdminPreguntas.edit', $preguntas->id)}}">Editar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="" type="button" data-toggle="modal" data-target="#exampleModal{{$preguntas->id}}">Eliminar</a>
                                                            
                                                        </div>
                                                    </div>

                                                    <form action="{{ route('AdminPreguntas.destroy', $preguntas->id)}}" method="POST">
                                                        @csrf @method('DELETE')

                                                        <div class="modal fade" id="exampleModal{{$preguntas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <strong class="modal-title" id="exampleModalLabel">¿Estás seguro de que quieres eliminar esta pregunta?</strong>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary">Eliminar</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
                    {{ $pregunta->links() }}
            </div>
        </div>
    </div>

</x-app-layout>