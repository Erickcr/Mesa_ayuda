<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Help_topic;
use App\Models\Tipo_usuario;
use Illuminate\Database\Seeder;

class help_topicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        help_topic::create([
            'help_topic' => 'Servicio escolar',
            'id_tipo_usuario' => '1',
            // 'id_departamento' => Departamento::where('nom_departamento', 'Administración')->value('id'),
            // 'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Alumno')->value('id')
        ]);
        help_topic::create([
            'help_topic' => 'Actividades extraescolares',
            'id_tipo_usuario' => '2',
            // 'id_departamento' => Departamento::where('nom_departamento', 'Sistemas y computo')->value('id'),
            // 'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Aspirante')->value('id')
        ]);
        help_topic::create([
            'help_topic' => 'Servicio social',
            'id_tipo_usuario' => '2',
            // 'id_departamento' => Departamento::where('nom_departamento', 'Titulación')->value('id'),
            // 'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Docente')->value('id')
        ]);
    }
}
