<x-app-layout>

    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Tipo de ayuda
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
                <div class="container col-md-8 col-md-offset-2">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Tipo de ayuda</strong>
                        </div> <br>

                        <a href="{{route ('TipoAyuda.agregarTipoAyuda')}}">
                            <button type="button" class="btn btn-success">Nuevo Tipo de Ayuda</button><br>
                        </a> <br>

                        @if ($ayuda->isEmpty())
                            <div>
                                <p style="color:red">No hay tipos de ayuda</p>
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Tipo de ayuda</th>
                                            <th scope="col">Tipo de usuario</th>
                                            <th scope="col">Fecha de Creación</th>
                                            <th scope="col">Fecha de Modificación</th>
                                            <th scope="col" id="accion">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ayuda as $ayuda)
                                            <tr>
                                                <td>{!! $ayuda->id !!}</td>
                                                <td>{!! substr($ayuda->help_topic, 0, 20).'...' !!}</td>
                                                <td>{!! $ayuda->tipo_usuario !!}</td>
                                                <td>{!! $ayuda->created_at !!}</td>
                                                <td>{!! $ayuda->updated_at !!}</td>
                                                <td>

                                                    <div class="dropdown text-center">
                                                        <button class="btn" id="dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{asset('imagenes/menu.png')}}" width="25px" height="25px">
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{route ('TipoAyuda.edit', $ayuda->id)}}">Editar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="" type="button" data-toggle="modal" data-target="#exampleModal{{$ayuda->id}}">Eliminar</a>
                                                            
                                                        </div>
                                                    </div>

                                                    <form action="{{ route('TipoAyuda.destroy', $ayuda->id)}}" method="POST">
                                                        @csrf @method('DELETE')

                                                        <div class="modal fade" id="exampleModal{{$ayuda->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <strong class="modal-title" id="exampleModalLabel">¿Estás seguro de que quieres eliminar este tipo de ayuda?</strong>
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
            </div>
        </div>
    </div>

</x-app-layout>