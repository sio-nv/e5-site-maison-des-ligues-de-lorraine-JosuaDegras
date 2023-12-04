<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ouvrage;

class OuvrageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ouvrage::insert([
            ['cote' => 1, 'auteur' => 'Patrick Chamoiseau', 'titre' => 'Maman Dlo contre la fée Carabosse', 'anneeParution' => 1981, 'type'=> 'theatre-conte', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 2, 'auteur' => 'Patrick Chamoiseau', 'titre' => 'Au temps de l\'antan','anneeParution' =>  1988, 'type'=> 'conte', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 23, 'auteur' => 'Patrick Chamoiseau', 'titre' => 'Texaco', 'anneeParution' => 1992, 'type'=> 'roman', 'urlImage' => 'texaco.jpg'],
            ['cote' => 24, 'auteur' => 'Patrick Chamoiseau','titre' =>  'L\'esclave, le vieil homme et le molosse', 'anneeParution' => 1997, 'type'=> 'conte', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 25, 'auteur' => 'Patrick Chamoiseau', 'titre' => 'Les neuf consciences du Malfini', 'anneeParution' => 2009, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 26, 'auteur' =>'Raphael Confiant','titre' =>  'Jou baré', 'anneeParution' => 1977, 'type'=> 'poesie', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 27, 'auteur' =>'Raphael Confiant','titre' =>  'Marisos', 'anneeParution' => 1987, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 28, 'auteur' =>'Raphael Confiant', 'titre' => 'Le nègre et l\'amiral', 'anneeParution' => 1988, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 29, 'auteur' =>'Raphael Confiant', 'titre' => 'Les maitres de la parole créole', 1995, 'type'=> 'conte', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 210, 'auteur' =>'Raphael Confiant','titre' => 'Brin d\'amour', 'anneeParution' => 2001, 'type'=> 'roman', 'urlImage' => 'img/couvertures/brin_d_amour.jpg'],
            ['cote' => 211, 'auteur' =>'Raphael Confiant', 'titre' =>'Citoyens au-dessus de tout soupçon', 'anneeParution' => 2010, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 212, 'auteur' =>'Frantz Fanon', 'titre' => 'Peau noire, masques blancs', 'anneeParution' => 1952, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 213, 'auteur' =>'Frantz Fanon', 'titre' => 'Les damnés de la terre','anneeParution' =>  1961, 'type'=>  'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 214, 'auteur' =>'Edouard Glissant','titre' =>  'La terre inquiète', 'anneeParution' => 1955, 'type'=> 'poesie', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 215, 'auteur' =>'Edouard Glissant', 'titre' => 'Pays rêve, pays réel', 'anneeParution' => 1985, 'type'=> 'poesie', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 216, 'auteur' =>'Edouard Glissant', 'titre' => 'La lézarde', 'anneeParution' => 1958,'type'=>  'roman', 'urlImage' => 'img/couvertures/la_lezarde.jpg'],
            ['cote' => 217, 'auteur' =>'Edouard Glissant', 'titre' => 'Tout-monde', 'anneeParution' => 1995,'type'=>  'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 218, 'auteur' =>'Edouard Glissant','titre' =>  'Ormerod', 'anneeParution' => 2003, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 219, 'auteur' =>'Edouard Glissant', 'titre' => 'Monsieur Toussaint', 'anneeParution' => 2003, 'type'=> 'theatre', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 220, 'auteur' => 'Daniel  Maximin', 'titre' => 'L\'isolé soleil', 'anneeParution' => 1981,'type'=>  'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 221, 'auteur' => 'Daniel  Maximin', 'titre' => 'Lone Sun', 'anneeParution' => 1989,'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 222, 'auteur' => 'Daniel  Maximin', 'titre' => 'L\'île et une nuit', 'anneeParution' => 2002, 'type'=> 'roman', 'urlImage' => 'img/couvertures/l_ile_et_une_nuit'],
            ['cote' => 223, 'auteur' => 'Xavier Orville', 'titre' => 'Délice et le fromager', 'anneeParution' => 1977, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 224, 'auteur' => 'Xavier Orville','titre' =>  'Moi, Trésilien-Theodore Auguste', 'anneeParution' => 1996, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 225, 'auteur' => 'Xavier Orville', 'titre' => 'Le parfum des belles de nuit','anneeParution' =>  1996, 'type'=> 'nouvelle', 'urlImage' => 'img/couvertures/le_parfum_des_belles_nuits.jpg'],
            ['cote' => 226, 'auteur' =>  'Gisèle Pineau', 'titre' => 'Un papillon dans la cité','anneeParution' =>  1992, 'type'=> 'roman', 'urlImage' => 'img/couvertures/un_papillon_dans_la_cite.jpg'],
            ['cote' => 227, 'auteur' =>  'Gisèle Pineau', 'titre' => 'Mes quatre femmes', 'anneeParution' => 2007, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 228, 'auteur' =>  'Gisèle Pineau', 'titre' => 'Folie, aller simple: Journée ordinaires d\'une infirmière', 2010, 'type'=> 'roman', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 229, 'auteur' => 'Joseph Zobel', 'titre' => 'Le soleil partagé', 'anneeParution' => 1964, 'type'=> 'nouvelle', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 230, 'auteur' => 'Joseph Zobel', 'titre' => 'Et si la mer n\'etait pas bleue', 'anneeParution' => 1982,'type'=>  'nouvelle', 'urlImage' => 'img/couvertures/et_si_la_mer_n_etait_pas_bleue.jpg'],
            ['cote' => 231, 'auteur' => 'Joseph Zobel', 'titre' => 'Le soleil m\'a dit', 'anneeParution' => 2002, 'type'=>  'poésie', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 232, 'auteur' => 'AImé Césaire','titre' =>  'Cahier d\'un retour au pays natal', 1939, 'type'=> 'poesie', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 233, 'auteur' => 'AImé Césaire', 'titre' => 'Les armes miraculeuses', 'anneeParution' => 1946, 'type'=> 'poesie', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 234, 'auteur' => 'AImé Césaire', 'titre' => 'Cadastre', 'anneeParution' => 1961,'type'=>  'poesie', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 235, 'auteur' => 'AImé Césaire', 'titre' => 'Sept poèmes', 'anneeParution' => 2010, 'type'=> 'poesie', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 236, 'auteur' => 'AImé Césaire', 'titre' => 'La tragédie du roi Christophe', 'anneeParution' => 1963, 'type'=> 'theatre', 'urlImage' => 'img/couvertures/livre.png'],
            ['cote' => 237, 'auteur' => 'AImé Césaire', 'titre' => 'Une saison au Congo', 'anneeParution' => 1966,'type'=>  'theatre', 'urlImage' => 'img/couvertures/une_saison_au_congo.jpg'],
            ['cote' => 238, 'auteur' => 'Saint-John Perse', 'titre' => 'Eloges', 'anneeParution' => 1911,'type'=>  'poesie', 'urlImage' => 'img/couvertures/eloges.jpg'],
            ['cote' => 239, 'auteur' => 'Saint-John Perse', 'titre' => 'Anabase', 'anneeParution' => 1924, 'type'=> 'poesie', 'urlImage' => 'img/couvertures/anabase.jpg'],
            ['cote' => 240, 'auteur' => 'Saint-John Perse', 'titre' => 'Sécheresse', 'anneeParution' => 1974, 'type'=> 'poesie', 'urlImage' => 'img/couvertures/livre.png'],
        ]);
    }
}
