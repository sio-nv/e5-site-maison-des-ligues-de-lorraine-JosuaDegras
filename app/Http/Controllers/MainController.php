<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
