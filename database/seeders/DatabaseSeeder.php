<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Help_topic;
use App\Models\Tipo_usuario;
use App\Models\Departamento;
use App\Models\User;
use App\Models\Preguntas_frecuentes;
use App\Models\Ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('departamento')->truncate();
        DB::table('tipo_usuario')->truncate();
        DB::table('help_topic')->truncate();
        DB::table('preguntas_frecuentes')->truncate();
        DB::table('users')->truncate();
        DB::table('ticket')->truncate();
        Schema::enableForeignKeyConstraints();

        $this->call(departamentoSeeder::class);
        $this->call(tipo_usuarioSeeder::class);
        $this->call(help_topicSeeder::class);
        $this->call(preguntas_frecuentesSeeder::class);
        $this->call(usersSeeder::class);
        $this->call(ticketSeeder::class);
    }
}
