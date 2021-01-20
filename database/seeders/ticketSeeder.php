<?php

namespace Database\Seeders;

use App\Models\Help_topic;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class ticketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ticket::create([
            'id_help_topic' => Help_topic::where('help_topic', 'Actividades extraescolares')->value('id'),
            'id_usuario' => User::where('email', 'qwert@gmail.com')->value('id'),
            'estado' => 'Pendiente',
            'asunto' => 'Informes sobre eventos',
        ]);
        ticket::create([
            'id_help_topic' => Help_topic::where('help_topic', 'Servicio escolar')->value('id'),
            'id_usuario' => User::where('email', 'trewq@gmail.com')->value('id'),
            'estado' => 'Pendiente',
            'asunto' => 'Informes sobre eventos',
        ]);
        ticket::create([
            'id_help_topic' => Help_topic::where('help_topic', 'Servicio social')->value('id'),
            'id_usuario' => User::where('email', 'qazxsw@gmail.com')->value('id'),
            'estado' => 'Pendiente',
            'asunto' => 'Informes sobre eventos',
        ]);
    }
}
