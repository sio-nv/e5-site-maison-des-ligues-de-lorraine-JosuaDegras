<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Societe;

class SocieteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Societe::insert([
        ['siret'=> '11227435344355', 'nom'=>'Cleanup', 'adresse'=>'35 Avenue du Général-Tripier 59243 Quarouble','telephone'=> 327494541, 'email'=>'cleanup@sfr.com'],
        ['siret'=> '11339481784751', 'nom'=>'Aux belles saveurs ', 'adresse'=>'54 Place du Docteur-Alfred-Fournier 69115 Chiroubl', 'telephone'=> 826149721, 'email'=>'secretariat@auxbellessaveur.fr'],
        ['siret'=> '24113495658294', 'nom'=>'NetStop', 'adresse'=>'56 Rue Harpignies 63820 Saint-Julien-Puy-Lavèze', 'telephone'=> 863223888, 'email'=>'netstop@free.fr'],
        ['siret'=> '45898745814175', 'nom'=>'ElecPlus ', 'adresse'=>'57 Rue du Faubourg-Saint-Jacques 47430 Sénestis', 'telephone'=> 231519338, 'email'=>'elecplus@orange.fr'],
        ['siret'=> '45931398235323', 'nom'=>'InfoDepan', 'adresse'=>'72 Rue Henri-Duchène 71410 Sanvignes-les-Mines','telephone'=>  236756598, 'email'=>'InfoDepan@bouygues.com'],
        ['siret'=> '84758493693252', 'nom'=>'Poissonnerie Gilo', 'adresse'=>'19 Rue du Capitaine-Madon 14500 Vire', 'telephone'=> 973644441, 'email'=>'gilopoissonnerie@giloSoc.fr']
    ]);
    }


}
