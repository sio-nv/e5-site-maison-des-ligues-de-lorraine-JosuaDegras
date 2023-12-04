<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Emprunteur;

class EmprunteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Emprunteur::insert([

            ['numeroCarte' => 6, 'nom' => 'Tessier', 'prenom' => 'Amina', 'adresse' => '145 Rue Dubrunfaut 11700 Saint-Couat-d\'Aude', 'telephone'=> '0611820264'],
            ['numeroCarte' => 20, 'nom' =>'Mana', 'prenom' => 'Victor', 'adresse' => '50 Rue Émile-Dubois 73590 Saint-Nicolas-la-Chapelle', 'telephone'=>'0690263982'],
            ['numeroCarte' => 57,'nom' => 'Jamet', 'prenom' => 'Mélissa', 'adresse' => '154 Rue du Dobropol 54600 Villers-lès-Nancy', 'telephone'=>'0659648146'],
            ['numeroCarte' => 68, 'nom' =>'Rose', 'prenom' => 'Chaïma', 'adresse' => '137 Rue des Camélias 88260 Viviers-le-Gras', 'telephone'=>'0643818972'],
            ['numeroCarte' => 76, 'nom' =>'Couturier', 'prenom' => 'Lena', 'adresse' => '298 Rue Alain-Chartier 33460 Soussans', 'telephone'=>'0647441090'],
            ['numeroCarte' => 90, 'nom' =>'Pierre', 'prenom' => 'Robin', 'adresse' => '96 Passage des Entrepreneurs 22470 Plouézec', 'telephone'=>'0649279332'],
            ['numeroCarte' => 103,'nom' => 'Laroche', 'prenom' => 'Valentine', 'adresse' => '175 Rue Jacques-Ibert 45110 Sigloy', 'telephone'=>'0687124310'],
            ['numeroCarte' => 124, 'nom' =>'Gay', 'prenom' => 'Mathis', 'adresse' => '20 Rue Gaston-Tessier 10190 Villemaur-sur-Vanne', 'telephone'=>'0620247540'],
            ['numeroCarte' => 134, 'nom' =>'Duhamel','prenom' =>  'Mélissa', 'adresse' => '148 Rue Beautreillis 67880 Krautergersheim','telephone' =>'0632047957'],
            ['numeroCarte' => 191, 'nom' =>'Gay', 'prenom' => 'Antonin','adresse' => '280 Rue Ernest-Hemingway 20100 Tivolaggio', 'telephone'=>'0627568378'],
            ['numeroCarte' => 196,'nom' => 'Arnould', 'prenom' => 'Salomé', 'adresse' => '172 Rue du Cardinal-Guibert 65260 Villelongue', 'telephone'=>'0621680188'],
            ['numeroCarte' => 208,'nom' => 'Bayle', 'prenom' => 'Benjamin', 'adresse' => '124 Passage des Épinettes 55100 Vacherauville','telephone'=> '0688330199'],
            ['numeroCarte' => 245,'nom' => 'Petitjean', 'prenom' => 'Anaël', 'adresse' => '298 Rue Hector-Malot 11540 Roquefort-des-Corbières', 'telephone'=>'0655185046'],
            ['numeroCarte' => 260, 'nom' =>'Bocquet','prenom' => 'Timothée', 'adresse' => '219 Villa Faucheur 64100 Bayonne', 'telephone'=>'0687513084'],
            ['numeroCarte' => 263, 'nom' =>'Bonnet','prenom' =>  'Mathis','adresse' =>  '105 Rue des Fossés-Saint-Marcel 71340 Saint-Bonnet-de-Cray', 'telephone'=>'0627932261'],
            ['numeroCarte' => 264, 'nom' =>'Gay', 'prenom' => 'Manon','adresse' =>  '91 Rue des Bauches 33121 Carcans', 'telephone'=>'0634235512'],
            ['numeroCarte' => 293, 'nom' =>'Fouquet', 'prenom' => 'Léonard', 'adresse' => '253 Rue Henry-Farman 14730 Giberville', 'telephone'=>'0636933584'],
            ['numeroCarte' => 320,'nom' => 'Da silva','prenom' =>  'Félix', 'adresse' => '88 Rue Belidor 17400 Voissay', 'telephone'=>'0647752551'],
            ['numeroCarte' => 383, 'nom' =>'Bazin', 'prenom' => 'Margaux', 'adresse' => '172 Avenue David-Weill 39160 Véria', 'telephone'=>'0697915337'],
            ['numeroCarte' => 402, 'nom' =>'Ferre', 'prenom' => 'Tom','adresse' =>  '212 Rue Jacques-Hillairet 77700 Serris', 'telephone'=>'0660719900'],
            ['numeroCarte' => 418,'nom' =>'Benard', 'prenom' => 'Mattéo', 'adresse' => '31 Avenue Émile-Deschanel 60680 Jonquières', 'telephone'=>'0673010695'],
            ['numeroCarte' => 485, 'nom' =>'Remy', 'prenom' => 'Tom','adresse' =>  '173 Impasse Érard 22780 Plounérin', 'telephone'=>'0680600854'],
            ['numeroCarte' => 526, 'nom' =>'Baron', 'prenom' => 'Enzo', 'adresse' => '46 Rue Jacques-Mawas 25360 Vaudrivillers', 'telephone'=>'0687472411'],
            ['numeroCarte' => 538, 'nom' =>'Leblanc', 'prenom' => 'Margot', 'adresse' => '13 Place Adolphe-Chérioux 16500 Saint-Maurice-des-Lions', 'telephone'=>'0616585255'],
            ['numeroCarte' => 539, 'nom' =>'Chauvin', 'prenom' => 'Élise', 'adresse' => '267 Square Gabriel-Fauré 73330 Vérel-de-Montbel', 'telephone'=>'0669847052'],
            ['numeroCarte' => 545,'nom' => 'Rousseau','prenom' =>  'Maéva', 'adresse' => '279 Avenue de Friedland 95190 Goussainville', 'telephone'=>'0609719742'],
            ['numeroCarte' => 555, 'nom' =>'Vincent', 'prenom' => 'Kyllian','adresse' =>  '220 Rue des Hospitalières-Saint-Gervais 26700 Pierrelatte', 'telephone'=>'0616748396'],
            ['numeroCarte' => 641, 'nom' =>'Camus', 'prenom' => 'Alice', 'adresse' => '141 Villa George-Sand 60128 Plailly', 'telephone'=>'0642291273'],
            ['numeroCarte' => 645, 'nom' =>'Laurent', 'prenom' => 'Gabriel', 'adresse' => '226 Rue de l\'Épée-de-Bois 35170 Pont-Réan', 'telephone'=>'0617598653'],
            ['numeroCarte' => 647,'nom' => 'Guillaume', 'prenom' => 'Inès', 'adresse' => '117 Rue Alexandre-Charpentier 81130 Villeneuve-sur-Vère', 'telephone'=>'0642221966'],
            ['numeroCarte' => 729, 'nom' =>'Regnier', 'prenom' => 'Julien', 'adresse' => '294 Place de l\'Europe 22940 Saint-Julien', 'telephone'=>'0673827962'],
            ['numeroCarte' => 734, 'nom' =>'Carpentier', 'prenom' => 'Nina', 'adresse' => '117 Rue Halévy 57142 Gondrexange', 'telephone'=>'0672572178'],
            ['numeroCarte' => 738, 'nom' =>'Duval','prenom' =>  'Margot', 'adresse' => '286 Square Georges-Lesage 80970 Sailly-Flibeaucourt', 'telephone'=>'0650402727'],
            ['numeroCarte' => 745, 'nom' =>'Maurin','prenom' =>  'Chaïma', 'adresse' => '66 Rue du Général-Lanrezac 47420 Sauméjan', 'telephone'=>'0624964625'],
            ['numeroCarte' => 798,'nom' =>'Hamel', 'prenom' => 'Maxence', 'adresse' => '3 Impasse Alexandre-Lécuyer 72200 Mareil-sur-Loir', 'telephone'=>'0629866710'],
            ['numeroCarte' => 812, 'nom' =>'Tessier', 'prenom' => 'Alice', 'adresse' => '96 Place du Docteur-Alfred-Fournier 70220 Fougerolles', 'telephone'=>'0644362418'],
            ['numeroCarte' => 814, 'nom' =>'Navarro', 'prenom' => 'Maelys','adresse' =>  '278 Rue de la Félicité 30630 Verfeuil', 'telephone'=>'0655379282'],
            ['numeroCarte' => 832, 'nom' =>'Normand', 'prenom' => 'Bruno', 'adresse' => '249 Pont du Garigliano 05230 Prunières', 'telephone'=>'0694516982'],
            ['numeroCarte' => 887,'nom' =>'Duhamel', 'prenom' => 'Chaïma', 'adresse' => '225 Rue Foyatier 77150 Lésigny', 'telephone'=>'0608036628'],
            ['numeroCarte' => 902, 'nom' =>'Marchand', 'prenom' => 'Adrien', 'adresse' => '164 Rue Guisarde 49160 Saint-Philbert-du-Peuple','telephone'=>'0601202772'],
            ['numeroCarte' => 924, 'nom' =>'Prigent', 'prenom' => 'Angelina','adresse' =>  '85 Rue Gounod 72000 Le Mans', 'telephone'=>'0621329036'],
            ['numeroCarte' => 964, 'nom' =>'Perret', 'prenom' => 'Juliette', 'adresse' => '165 Place de l\'Adjudant-Vincenot 54290 Virecourt', 'telephone'=>'0618052757'],
            ['numeroCarte' => 974, 'nom' =>'Costa', 'prenom' => 'Ambre', 'adresse' => '99 Rue Duc 82700 Saint-Porquier', 'telephone'=>'0679943982'],
            ['numeroCarte' => 977, 'nom' =>'Martin', 'prenom' => 'Bruno','adresse' =>  '111 Square Alban-Satragne 66190 Collioure', 'telephone'=>'0604713489'],
            ['numeroCarte' => 978, 'nom' =>'Guillou', 'prenom' => 'Simon', 'adresse' => '235 Rue Gaby-Sylvia 04320 Villevieille', 'telephone'=>'0660380168'],
            ['numeroCarte' => 986, 'nom' =>'Barbier', 'prenom' => 'Lily', 'adresse' => '2 Rue Gramme 59160 Lomme', 'telephone'=>'0624528006']

        ]);
    }
}
