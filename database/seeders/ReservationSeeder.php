<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE reservations AUTO_INCREMENT = 1');


        Reservation::insert([
        ['id_resa'=> 1, 'dateres'=> '2015-04-13', 'heuredeb'=> '13:00:00', 'heurefin'=>'14:30:00', 'batiment'=>'A', 'complement'=>NULL, 'motif'=>'réunion d\'affaire', 'codeclient'=>'ZEA52YE7A', 'numsalle'=>4],
        ['id_resa'=> 2, 'dateres'=>  '2015-04-13', 'heuredeb'=>'14:30:00', 'heurefin'=>'16:00:00','batiment'=>'A','complement'=>NULL, 'motif'=>NULL,'codeclient'=>'123Y4Z0E8',  'numsalle'=>4],
        ['id_resa'=> 3, 'dateres'=>  '2015-09-12', 'heuredeb'=>'08:00:00', 'heurefin'=>'12:00:00','batiment'=> 'B', 'complement'=>NULL, 'motif'=>'Assemblée générale','codeclient'=> '3TR6D9SK', 'numsalle'=>1],
        ['id_resa'=> 4, 'dateres'=> '2016-01-16', 'heuredeb'=>'16:00:00', 'heurefin'=>'18:00:00', 'batiment'=>'B', 'complement'=>NULL, 'motif'=>'Assemblée générale', 'codeclient'=>'3TR6D9SK', 'numsalle'=>1],
        ['id_resa'=> 5,  'dateres'=> '2010-09-10', 'heuredeb'=>'08:00:00', 'heurefin'=>'12:00:00', 'batiment'=>'B', 'complement'=>NULL, 'motif'=>'Assemblée générale','codeclient'=> '3TR6D9SK', 'numsalle'=>1],
        ['id_resa'=> 6,  'dateres'=> '2016-01-03', 'heuredeb'=>'10:00:00', 'heurefin'=>'16:00:00', 'batiment'=>'D', 'complement'=>'fourniture d\'eau et aménagement', 'motif'=>'réception','codeclient'=> 'D437AER9U', 'numsalle'=>11]
    ]);
    }
}
