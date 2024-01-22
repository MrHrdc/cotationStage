<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = User::all();

        return view('admin.pages.agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fonctions = Fonction::all();

        return view('admin.pages.agents.create', compact('fonctions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Créer un nouvel utilisateur
        $agent = new User();
        $agent->nom = $request->input('nom');
        $agent->matricule= $request->input('matricule');
        $agent->grade = $request->input('grade');
        $agent->service= $request->input('service');
        $agent->email = $request->input('email');
        $agent->postnom = $request->input('postnom');
        $agent->prenom = $request->input('prenom');
        $agent->password = bcrypt($request->input('password'));

        // Enregistrer l'utilisateur
        $agent->save();

        // Associer la fonction à l'utilisateur
        $fonction = Fonction::find($request->input('fonction_id'));
        $agent->fonction()->associate($fonction);
        $agent->save();

        // Rediriger ou afficher un message de succès
        return redirect()->route('agents.index')->with('success', 'Fonction mise à jour avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $agent)
    {
        return view('admin.pages.agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $agent)
    {
        $fonctions = Fonction::all();

        return view('admin.pages.agents.edit', compact(['agent', 'fonctions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Récupérer l'utilisateur à mettre à jour
        $agent = User::findOrFail($id);

        // Mettre à jour les champs de l'utilisateur
        $agent->nom = $request->input('nom');
        $agent->matricule= $request->input('matricule');
        $agent->grade = $request->input('grade');
        $agent->service = $request->input('service');
        $agent->prenom = $request->input('prenom');
        $agent->email = $request->input('email');
        $agent->postnom = $request->input('postnom');
        $agent->prenom = $request->input('prenom');

        // Vérifier si un nouveau mot de passe est fourni
        if ($request->filled('password')) {
            $agent->password = bcrypt($request->input('password'));
        }

        // Associer la fonction à l'utilisateur
        $fonction = Fonction::find($request->input('fonction_id'));
        $agent->fonction()->associate($fonction);

        // Enregistrer les modifications de l'utilisateur
        $agent->save();

        // Rediriger ou afficher un message de succès
        return redirect()->route('agents.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $agent)
    {
        // Vérifier si l'utilisateur existe
        if ($agent) {
            // Supprimer l'utilisateur
            $agent->delete();

            // Rediriger vers une autre page ou retourner une réponse JSON
            return redirect()->route('agents.index')->with('success', 'L\'agent a été supprimé avec succès.');
        } else {
            // L'utilisateur n'existe pas, retourner une réponse d'erreur
            return redirect()->route('agents.index')->with('error', 'L\'agent n\'existe pas.');
        }
    }
}
