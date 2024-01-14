<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $nombreStagiaires = Stagiaire::count();
        $nombreAgents = User::count();

        return view('index', compact('nombreStagiaires', 'nombreAgents'));
    }
}
