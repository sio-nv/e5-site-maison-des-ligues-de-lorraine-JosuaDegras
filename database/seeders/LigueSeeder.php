<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ligue;
use Illuminate\Support\Facades\DB;

class LigueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('ALTER TABLE ligues AUTO_INCREMENT = 1');


        Ligue::insert([
            ['nom'=>'Tennis'],
            ['nom'=>'Football'],
            ['nom'=>'Plongé'],
            ['nom'=>'Kayak'],
            ['nom'=>'Bowling'],
            ['nom'=>'Tennis de table'],
            ['nom'=>'Volley ball'],
            ['nom'=>'Aquagym'],
            ['nom'=>'Rugby'],
            ['nom'=>'Board']
        ]);
    }
}
