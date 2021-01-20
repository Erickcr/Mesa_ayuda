<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Jefes de Área
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="container col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Jefes de Área Registrados</strong>
                        </div> 
                        <br>
                            <a href="{{ route('JefeArea.NuevoJefe') }}">
                                <button type="button" class="btn btn-dark">
                                    Nuevo Jefe de Área
                                </button>
                            </a>
                        <br>
                        <br>

                        @if ($jefesarea->isEmpty())
                            <div>
                                <p style="color:red">No hay usuarios</p>
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellidos</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" id="accion">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($jefesarea as $jefes)
                                            <tr>
                                                <td>{!! $jefes->id !!}</td>
                                                <td>{!! $jefes->name !!}</td>
                                                <td>{!! $jefes->apellidos !!}</td>
                                                <td>{!! $jefes->email !!}</td>
                                                <td>
                                                    <div class="dropdown text-center">
                                                        <button class="btn" id="dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{asset('imagenes/menu.png')}}" width="25px" height="25px">
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{route ('edit', $jefes->id)}}">Editar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="{{route ('show', $jefes->id)}}">Mostrar info</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="" type="button" data-toggle="modal" data-target="#exampleModal{{$jefes->id}}">Eliminar</a>
                                                            
                                                        </div>
                                                    </div>

                                                    <form action="{{ route('delete', $jefes->id)}}" method="POST">
                                                        @csrf @method('DELETE')

                                                        <div class="modal fade" id="exampleModal{{$jefes->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="row justify-content-start form-group">
                            <a href="{{ route('Administrador.Usuarios') }}" class="col-5 col-sm-3 col-md-2 mt-1">
                                <button type="button" class="btn btn-outline-danger col-12">Regresar</button>
                            </a>
                        </div>
                </div>
                    {{ $jefesarea->links() }}
            </div>
            
        </div>
    </div>

</x-app-layout>