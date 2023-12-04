<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::insert([
            ['codeCli'=> '123Y4Z0E8', 'raisonSociale' => 'SARL les Boutilles','adresse'=> '7, avenue les Alizés','telfixe'=> '0177887766', 'telmobile'=>'', 'correspondant'=>'Mme Champ'],
            ['codeCli'=> '3TR6D9SK', 'raisonSociale' =>'ASL les Bas de Lavita', 'adresse'=>'Lotissement les Agandas','telfixe'=> '0456783526', 'telmobile'=>'', 'correspondant'=>'M Jotupala'],
            ['codeCli'=> 'D437AER9U', 'raisonSociale' =>'Club l\'âge d\'or', 'adresse'=>'23 rue des anguilles', 'telfixe'=>'0124352618', 'telmobile'=>'', 'correspondant'=>'M Torti'],
            ['codeCli'=> 'HQME72TE', 'raisonSociale' =>'entreprise \"Goback\"', 'adresse'=>'16 avenue des crireurs', 'telfixe'=>'0387651292', 'telmobile'=>'', 'correspondant'=>'Mme Bilo ou M Dra'],
            ['codeCli'=> 'ZEA52YE7A','raisonSociale' => 'entreprise \"Les sentinelles\"','adresse'=> '17 rue des aztèques', 'telfixe'=>'', 'telmobile'=>'0678124556', 'correspondant'=>'M Babibuouel'],
            ['codeCli'=> 'ZRR897AZ', 'raisonSociale' =>'Société unipersonnelle', 'adresse'=>'27 rue des Acacias', 'telfixe'=>'00000000', 'telmobile'=>'0000666', 'correspondant'=>'M. Jean-Karl MALO']
        ]);
    }
}
