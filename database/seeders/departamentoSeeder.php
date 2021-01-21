<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        departamento::create([
            'nom_departamento' => 'Sistemas y computo',
        ]);
        departamento::create([
            'nom_departamento' => 'Administración',
        ]);
        departamento::create([
            'nom_departamento' => 'Titulación',
        ]);
    }
}
