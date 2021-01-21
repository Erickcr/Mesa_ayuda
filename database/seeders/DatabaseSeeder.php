<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('departamento')->truncate();
        DB::table('tipo_usuario')->truncate();
        DB::table('help_topic')->truncate();
        DB::table('preguntas_frecuentes')->truncate();
        DB::table('users')->truncate();
        DB::table('ticket')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        $this->call(departamentoSeeder::class);
        $this->call(tipo_usuarioSeeder::class);
        $this->call(help_topicSeeder::class);
        $this->call(preguntas_frecuentesSeeder::class);
        $this->call(usersSeeder::class);
        $this->call(ticketSeeder::class);
    }
}
