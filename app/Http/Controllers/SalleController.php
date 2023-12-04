<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $resultats = Salle::all();         
         return view('gestionnaires.salles', ["lessalles" => $resultats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //E5 liste déroulante pour le bâtiment
        $resultats = Salle::select('batiment')->distinct()->orderBy('batiment', 'ASC')->get();

        return view('gestionnaires.ajout_salle', ["batiments" => $resultats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['numerosalle' => 'required']);
        $this->validate($request,['nom' => 'required']);

            
        $lasalle = new Salle();
       
        $lasalle->numeroSalle = $request->input('numerosalle');
        $lasalle->nom = $request->input('nom');
        $lasalle->capacite = $request->input('capacite');
        $lasalle->equipements = $request->input('equipements');
        $lasalle->services = $request->input('services');
        $lasalle->batiment = $request->input('batiment');

        $lasalle->save();
    
        //affichage de la vue themes
        return redirect('/salle');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function show(salle $salle)
    {

        return view('gestionnaires.fiche_salle', ["salle_choisie" => $salle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function edit(salle $salle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salle $salle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function destroy(salle $salle)
    {
        //
    }
}
