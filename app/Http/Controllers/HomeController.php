<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // chargement de la page d'accueil
    public function home()
    {
        return view('home.index');
    }
}
