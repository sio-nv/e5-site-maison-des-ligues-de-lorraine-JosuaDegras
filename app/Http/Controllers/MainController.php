<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ouvrage;
use App\Models\Emprunteur;


class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function ligues()
    {
        return view('visiteurs.ligues');
    }

    public function planning()
    {
        return view('visiteurs.evenements');
    }

    public function contact()
    {
        return view('visiteurs.contact');
    }

    public function evenements()
    {
        return view('visiteurs.evenements');
    }

    public function genre($type)
    {

        if($type == "tous"){
            $ouvrages = Ouvrage::all();
        }
        else{
            $ouvrages = Ouvrage::where('type', $type)->get();
        }

        $tous_les_types = Ouvrage::distinct()->pluck('type');

        return view('visiteurs.ouvrages', ["types" => $tous_les_types , "livres" => $ouvrages]);

    }

    public function verifierNumero($numero)
    {
        $emprunteur = Emprunteur::where('numeroCarte', $numero)->first();

        if ($emprunteur = 555) {
            // Rediriger vers la vue si le client a emprunté des ouvrages
            return view('visiteurs.pretOuvrage', ['emprunteur' => $emprunteur]);
        } else {
            // Rediriger vers la vue si le client n'a pas emprunté d'ouvrages
            return view('visiteurs.aucunpret');
        }
    }
}
