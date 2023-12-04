<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestController extends Controller
{
    public function index()
    {
        return view('gestionnaires/welcome-gest');
    }
}
