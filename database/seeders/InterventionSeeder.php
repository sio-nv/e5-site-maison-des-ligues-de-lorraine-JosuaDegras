<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Intervention;
use Illuminate\Support\Facades\DB;


class InterventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('ALTER TABLE interventions AUTO_INCREMENT = 1');


        Intervention::insert([
            ['id_inter'=> 1, 'numSalle' => 1,'numIntervenant' =>  6, 'date' => '2019-11-24', 'heure'=> '09:00:00', 'motif' => 'Nettoyage de l\'amphi'],
            ['id_inter'=> 3,  'numSalle' => 14, 'numIntervenant' => 30, 'date' => '2019-11-25', 'heure'=> '10:00:00', 'motif' => 'Ajout de prises côté porte'],
            ['id_inter'=> 4,  'numSalle' => 15, 'numIntervenant' => 30, 'date' => '2019-11-25', 'heure'=> '10:00:00', 'motif' => 'Ajout de prises côté porte'],
            ['id_inter'=> 5, 'numSalle' =>  16, 'numIntervenant' => 30, 'date' => '2019-11-25', 'heure'=> '10:00:00', 'motif' => 'Ajout de prises côté porte']
        ]);
    }
}
