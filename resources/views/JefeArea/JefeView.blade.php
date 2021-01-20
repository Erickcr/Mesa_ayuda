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
                            <strong>Nuevos Tickets</strong>
                        </div> <br>

                        

                        @if ($pregunta1->isEmpty())
                            <div>
                            <p style="color:red">No hay nuevos tickets</p></div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="">
                                        <tr>
                                            <th scope="col"># Ticket</th>
                                            <th scope="col">Tema de ayuda</th>
                                            <th scope="col">Nombre del usuario</th>
                                            <th scope="col">Estatus del ticket</th>
                                            <th scope="col">Asunto del ticket</th>
                                            <th scope="col">Fecha de creación</th>
                                            <th scope="col" id="accion">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pregunta1 as $nuevo)
                                            <tr>
                                                <td>{!! $nuevo->id !!}</td>
                                                <td>{!! $nuevo->help_topic !!}</td>
                                                <td>{!! $nuevo->name !!}</td>
                                                <td>{!! $nuevo->estado !!}</td>
                                                <td style="max-width: 40px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{!! $nuevo->asunto !!}</td>
                                                <td>{!! $nuevo->created_at !!}</td>
                                                <td>
                                                    <div class="dropdown text-center">
                                                        <button class="btn" id="dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{asset('imagenes/menu.png')}}" width="25px" height="25px">
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{route ('respuestaform', $nuevo->id)}}">Responder</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="" type="button" data-toggle="modal" data-target="#exampleModal">Eliminar</a>
                                                            
                                                        </div>
                                                    </div>

                                                    <form action="{{ route('borrar', $nuevo->id)}}" method="POST">
                                                        @csrf @method('DELETE')

                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    {{ $pregunta1->links() }}
            </div>
        </div>
    </div>

</x-app-layout>