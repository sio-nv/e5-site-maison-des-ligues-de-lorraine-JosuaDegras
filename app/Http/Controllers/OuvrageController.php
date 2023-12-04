<?php

namespace App\Http\Controllers;

use App\Models\Ouvrage;
use Illuminate\Http\Request;

class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //équivalent à "select * from ouvrages"
         $resultats = Ouvrage::all();
      
         //demande d'affichage de la liste des ouvrages à la vue
         return view('visiteurs.ouvrages', ["leslivres" => $resultats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function show(ouvrage $ouvrage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function edit(ouvrage $ouvrage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ouvrage $ouvrage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ouvrage $ouvrage)
    {
        //
    }
}
