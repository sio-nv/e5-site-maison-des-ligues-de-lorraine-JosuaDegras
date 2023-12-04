<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        $this->call(ClientSeeder::class);
        $this->call(EmprunteurSeeder::class);
        $this->call(EvenementSeeder::class);
        $this->call(LigueSeeder::class);
        $this->call(OuvrageSeeder::class);
        $this->call(SalleSeeder::class);
        $this->call(SocieteSeeder::class);

        $this->call(IntervenantSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(InterventionSeeder::class);
    }
}
