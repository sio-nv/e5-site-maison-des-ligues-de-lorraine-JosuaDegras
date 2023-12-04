<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salle;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salle::insert([
            ['numeroSalle' => 1, 'nom'=>'amphitéatre ','capacite'=> 200, 'equipements'=>'4 prises éthernet de catégorie 5, système de vidéo projection sur grand écran, 1 prise éthernet régie','services'=> NULL, 'batiment'=>'B'],
            ['numeroSalle' =>2,  'nom'=>'baccarat ','capacite'=>40, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'A'],
            ['numeroSalle' =>3,  'nom'=>'corbin', 'capacite'=>50, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'A'],
            ['numeroSalle' =>4,  'nom'=>'daum', 'capacite'=>30,'equipements'=> 'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'A'],
            ['numeroSalle' =>5,  'nom'=>'gallé', 'capacite'=>12,'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'A'],
            ['numeroSalle' =>6,  'nom'=>'grüber','capacite'=> 24,'equipements'=> 'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL,'batiment'=> 'C'],
            ['numeroSalle' =>7,  'nom'=>'lamour','capacite'=> 50, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'B'],
            ['numeroSalle' =>8,  'nom'=>'longwy','capacite'=> 40, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'B'],
            ['numeroSalle' =>9,  'nom'=>'marjorelle','capacite'=> 50, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'D'],
            ['numeroSalle' =>10,  'nom'=>'multimédia', 'capacite'=>24, 'equipements'=>'24 ordinateurs, 26 prises ethernet, 1 PC formateur, 1 imprimante réseau', 'services'=>NULL, 'batiment'=>'B'],
            ['numeroSalle' =>11,  'nom'=>'restauration et convivialité', 'capacite'=>0, 'equipements'=>'digicode','services'=> 'aménagement, fourniture eau café ,etc..','batiment'=>'D'],
            ['numeroSalle' =>12,  'nom'=>'Salle de services', 'capacite'=>0, 'equipements'=>NULL, 'services'=>NULL, 'batiment'=>'B'],
            ['numeroSalle' =>13,  'nom'=>'Aucune information','capacite'=> 0, 'equipements'=>NULL, 'services'=>NULL,'batiment'=> '0'],
            ['numeroSalle' =>14,  'nom'=>'Administration M2L','capacite'=> 0, 'equipements'=>NULL, 'services'=>NULL,'batiment'=> 'C'],
            ['numeroSalle' =>15,  'nom'=>'Administration M2L', 'capacite'=>0, 'equipements'=>NULL, 'services'=>NULL, 'batiment'=>'C'],
            ['numeroSalle' =>16,  'nom'=>'Administration M2L','capacite'=> 0,'equipements'=>NULL, 'services'=>NULL,'batiment'=> 'C'],
            ['numeroSalle' =>17,  'nom'=>'cuisine','capacite'=> 0,'equipements'=> NULL, 'services'=>NULL,'batiment'=> 'D'],
            ['numeroSalle' =>18,  'nom'=>'reprographie', 'capacite'=>0,'equipements'=> NULL,'services'=> NULL, 'batiment'=>'D'],
            ['numeroSalle' =>25,  'nom'=>'Nouvelle', 'capacite'=>15, 'equipements'=>'vidéo projecteur', 'services'=>'nettoyage', 'batiment'=>'0']
        ]);
    }
}
