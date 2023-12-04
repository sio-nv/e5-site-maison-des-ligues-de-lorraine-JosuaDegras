<?php

namespace App\Http\Controllers;

use App\Models\Ligue;
use Illuminate\Http\Request;

class LigueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liste_ligues = Ligue::all();

        return view('nos-ligues',['liste_ligues',$liste_ligues]);
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
     * @param  \App\Models\Ligue  $ligue
     * @return \Illuminate\Http\Response
     */
    public function show(Ligue $ligue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ligue  $ligue
     * @return \Illuminate\Http\Response
     */
    public function edit(Ligue $ligue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ligue  $ligue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ligue $ligue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ligue  $ligue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ligue $ligue)
    {
        //
    }
}
