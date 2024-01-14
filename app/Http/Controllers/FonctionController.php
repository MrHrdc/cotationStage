<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use Illuminate\Http\Request;

class FonctionController extends Controller
{
    public function index()
    {
        $fonctions = Fonction::all();

        return view('admin.pages.fonctions.index', compact('fonctions'));
    }

    public function create()
    {
        return view('admin.pages.fonctions.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|unique:fonctions',
        ]);

        // Créer une nouvelle fonction
        $fonction = new Fonction();
        $fonction->name = $validatedData['name'];
        $fonction->save();

        // Rediriger vers la liste des fonctions
        return back()->with('success', 'Fonction créée avec succès.');
    }

    public function show(Fonction $fonction)
    {
        return view('fonctions.show', compact('fonction'));
    }

    public function edit(Fonction $fonction)
    {
        return view('admin.pages.fonctions.edit', compact('fonction'));
    }

    public function update(Request $request, Fonction $fonction)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|unique:fonctions,name,'.$fonction->id,
        ]);

        // Mettre à jour les données de la fonction
        $fonction->name = $validatedData['name'];
        $fonction->save();

        // Rediriger vers la liste des fonctions
        return redirect()->route('fonctions.index')->with('success', 'Fonction mise à jour avec succès.');
    }

    public function destroy(Fonction $fonction)
    {
        $fonction->delete();

        return redirect()->route('fonctions.index')->with('success', 'Fonction mise à jour avec succès.');
    }
}
