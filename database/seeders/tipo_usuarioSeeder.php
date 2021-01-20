<?php

namespace Database\Seeders;

use App\Models\Tipo_usuario;
use Illuminate\Database\Seeder;

class tipo_usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipo_usuario::create([
            'tipo_usuario' => 'Alumno'
        ]);
        tipo_usuario::create([
            'tipo_usuario' => 'Docente'
        ]);
        tipo_usuario::create([
            'tipo_usuario' => 'Aspirante'
        ]);
        tipo_usuario::create([
            'tipo_usuario' => 'Administrador'
        ]);
        tipo_usuario::create([
            'tipo_usuario' => 'Jefe'
        ]);
    }
}
