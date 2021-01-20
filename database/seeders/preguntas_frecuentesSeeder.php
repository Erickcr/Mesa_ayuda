<?php

namespace Database\Seeders;

use App\Models\departamento;
use Illuminate\Database\Seeder;
use App\Models\Help_topic;
use App\Models\Preguntas_frecuentes;

class preguntas_frecuentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        preguntas_frecuentes::create([
            'pregunta' => '¿Como te llamas?',
            'respuesta' => 'usifdfjiewdweandjlkaljksfldaksjflkasdjfkldjskfljasdlkfjsaldkfjasfk',
            'id_departamento' => departamento::where('nom_departamento', 'Sistemas y computo')->value('id'),
            // 'id_departamento' => Departamento::where('nom_departamento', 'Administración')->value('id'),
            // 'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Alumno')->value('id')
        ]);

        preguntas_frecuentes::create([
            'pregunta' => '¿Cual es tu nombre?',
            'respuesta' => 'usifdfjiewdweandjlkaldjskfljasdlkfjsaldkfjasfk',
            'id_departamento' => departamento::where('nom_departamento', 'Sistemas y computo')->value('id'),
            // 'id_departamento' => Departamento::where('nom_departamento', 'Administración')->value('id'),
            // 'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Alumno')->value('id')
        ]);

        preguntas_frecuentes::create([
            'pregunta' => '¿Donde vives?',
            'respuesta' => 'usifkaldjskfljasdlkfjsaldkfjasfk',
            'id_departamento' => departamento::where('nom_departamento', 'Sistemas y computo')->value('id'),
            // 'id_departamento' => Departamento::where('nom_departamento', 'Administración')->value('id'),
            // 'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Alumno')->value('id')
        ]);

    }
}
