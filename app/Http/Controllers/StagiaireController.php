<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();

        return view('admin.pages.stagiaires.index', compact('stagiaires'));
    }

    public function create()
    {
        return view('admin.pages.stagiaires.create');
    }

    public function store(Request $request)
    {
        $stagiaire = new Stagiaire();
        $stagiaire->nom = $request->input('nom');
        $stagiaire->sexe = $request->input('sexe');
        $stagiaire->postnom = $request->input('postnom');
        $stagiaire->prenom = $request->input('prenom');
        $stagiaire->lieu_affection = $request->input('lieu_affection');
        $stagiaire->domaine_stage = $request->input('domaine_stage');
        $stagiaire->institution_provenance = $request->input('institution_provenance');
        $stagiaire->date_debut = $request->input('date_debut');
        $stagiaire->date_fin = $request->input('date_fin');
        $stagiaire->save();

        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire créé avec succès.');
    }

    public function show(Stagiaire $stagiaire)
    {
        dd($stagiaire->id);

        return view('admin.pages.stagiaires.show', compact('stagiaire'));
    }

    public function edit(Stagiaire $stagiaire)
    {
        return view('admin.pages.stagiaires.edit', compact('stagiaire'));
    }

    public function update(Request $request, Stagiaire $stagiaire)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:stagiaires,email,'.$stagiaire->id,
            'postnom' => 'required',
            'prenom' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);

        $stagiaire->update($validatedData);

        return redirect()->route('admin.pages.stagiaires.index')->with('success', 'Stagiaire mis à jour avec succès.');
    }

    public function destroy(Stagiaire $stagiaire)
    {
        // Vérifier si l'utilisateur existe
        if ($stagiaire) {
            // Supprimer l'utilisateur
            $stagiaire->delete();

            // Rediriger vers une autre page ou retourner une réponse JSON
            return redirect()->route('stagiaires.index')->with('success', 'Le(a) stagiaire a été supprimé avec succès.');
        } else {
            // L'utilisateur n'existe pas, retourner une réponse d'erreur
            return redirect()->route('stagiaires.index')->with('error', 'Le(a) stagiaire n\'existe pas.');
        }
    }
}
