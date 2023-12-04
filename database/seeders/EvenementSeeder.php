<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evenement;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE evenements AUTO_INCREMENT = 1');


        $faker = Faker::create();


        for ($i = 0; $i < 10; $i++) {

            $date_eve = $faker->date($format = 'Y-m-d', $max = 'now');
            $town = $faker->city;
            $intitule = $faker->numerify('Evenement ##');
            $details = $faker->realText($maxNbChars = 200, $indexSize = 2);

            Evenement::insert([['intitule' => $intitule, 'date_deb' => $date_eve, 'date_fin' => $date_eve, 'details' => $details, 'lieu' => $town]]);
        }
    }
}
