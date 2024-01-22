<?php

namespace App\Http\Controllers;

use App\Models\Fiche;
use App\Models\Stagiaire;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $nombreFiches = Fiche::count();
        $nombreStagiaires = Stagiaire::count();
        $nombreAgents = User::count();

        return view('index', compact('nombreStagiaires', 'nombreAgents', 'nombreFiches'));
    }
}
