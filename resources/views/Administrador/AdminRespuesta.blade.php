
<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Respuesta a ticket {{$ticket->id}}
    </x-slot>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">
 
            @if(session('respuestaGenerada'))
            <div class="alert alert-success">
            {{session('respuestaGenerada')}}
            </div>
            @endif

           <div class="card">
            <form action="{{ route('respuesta', $ticket->id) }}" method="POST">
            @csrf @method('POST')
                    <div class="card-header text-center">RESPUESTA DIRECTA AL TICKET <strong>{{$ticket->id}}</strong></div>

                    <div class="card-body">
                    <div class="form-group">
                        <label for="disabledTextInput">Asunto</label>
                        <p style ="font-family: 'Montserrat', sans-serif; color:#0c1647;font-weight: bold; font-size:25px;">{{$ticket->asunto}}</p> 
                        
                    </div>
                    </div>




                    <div class="card-body">
                    <div class="form-group">
                    <label >Estado *</label>
                    <br>
                    <select class="custom-select" name="estado" id="estado" required autofocus autocomplete="estado">
                    <option value="">----Selecciona un estado-----</option>
                    @foreach( $estado as $estado => $value )
                     <option value="{{ $estado }}">{{ $value }}</option>
                    @endforeach
                    
                    
                    </select>
                    
                    <!-- <x-jet-label for="estado" value="{{ __('Estado') }}" />
                    <x-jet-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')"
                        placeholder="Estado" required autofocus autocomplete="estado" /> -->
                </div> 
                </div>



                <div class="card-body">
                    <div class="form-group">
                    <x-jet-label for="respuesta" value="{{ __('Respuesta') }}" />
                    <x-jet-input id="respuesta" class="block mt-1 w-full" type="text" name="respuesta" :value="old('respuesta')"
                        placeholder="Respuesta" />
                        <small>Opcional, solo de dará respuesta si es directamente proporcionada por el administrador, si se canalizará, puede dejarlo en blanco.</small>
                </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                    <label >Canalizar a: </label>
                    <br>
                    <select class="custom-select" name="id_departamento" id="id_departamento">
                    <option value="">----Selecciona un departamento-----</option>
                    @foreach( $dept as $depar)
                     <option value="{{ $depar->id}}">{{ $depar->nom_departamento}}</option>
                    @endforeach
                    
                    
                    </select>
                    <small>Opcional, solo se seleccionará si el administrador no conoce la respuesta.</small>
                </div>
                </div>


                       <br>

                       <div class="card-body">
                    <div class="form-group">
                    <p>Archivo Adjunto</p>
                    <a href="/storage/Archivos/{{ $ticket->file }}" class="btn btn-primary py-2"
                                    role="button">
                                    Descarga Ahora</a>
                                    </div>
                </div>

               
                <br>
                <h1 style="color:red;">* CAMPOS OBLIGATORIOS</h1>
                
                <br>
                      
                            <div class="row justify-content-around form-group">
                                <a href="{{ route('Administrador.Adminticket') }}" class="col-8 col-sm-3 col-md-2 mt-1">
                                    <button type="button" class="btn btn-outline-danger col-12">Cancelar</button>
                                </a>
                                <button type="submit" class="btn btn-success  col-7 col-sm-3 col-md-2 mt-1">Generar</button>
                            </div>
                        



                    </div>

                </form>


            </div>
            
           
            </div>
        </div>
    </div>

</x-app-layout>
