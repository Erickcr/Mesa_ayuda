<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout.
        --}}
        Crear ticket
    </x-slot>

    <div class="container mx-auto">

        <br><br>
        <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">
            <form enctype="multipart/form-data" action="{{ route('ticket.store') }}" method="POST">
                @csrf
                <div class="mb-3">

                    <label class="form-label mb-2" for="id_help_topic">Tipo de ayuda</label>
                    <select wire:model="id_help_topic" required name="id_help_topic" id="id_help_topic"
                        class="block  w-full px-2 py-1 rounded text-gray-700 border">
                        @foreach ($help_topic as $topics)
                            <option value="{{ $topics->id }}">{{ $topics->help_topic }}</option>

                        @endforeach

                    </select>
                </div>


                <div class="mb-3">
                    <label for="asunto" class="form-label mb-2 ">asunto</label>
                    <textarea wire:model="asunto" id="asunto" name="asunto" required placeholder="Ingrese el asunto del Ticket"
                        rows="4" class="form-control"></textarea>
                </div>

                <div class="mb-2">
                    <input type="file" name="file" required class="form-control ">
                </div>

                <button type="submit" class="boton ">Crear ticket</button>
                <a href="{{ route('inicio') }}"
                    class="border hover:no-underline  border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">Cancelar</a>

            </form>


        </div>
        <br>


    </div>
</x-app-layout>
