<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateficheRequest;
use App\Models\Fiche;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les fiches avec les informations du stagiaire
        $fiches = Fiche::with('stagiaire')->distinct()->get();

        return view('admin.pages.fiches.index', compact('fiches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stagiaires = Stagiaire::all();

        return view('admin.pages.fiches.create', compact('stagiaires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Vérifier si une fiche pour le stagiaire existe déjà
        $existingFiche = Fiche::where('stagiaire_id', $request->input('stagiaire_id'))->first();
        if ($existingFiche) {
            return view('admin.pages.fiches.index')->with('error', 'Un stagiaire existe déjà avec cette fiche.');
        } else {
            // Récupérer l'ID de l'utilisateur connecté
            $userId = $request->user()->id;

            // Créer une nouvelle fiche
            $fiche = new Fiche();
            $fiche->cons_str_acc = $request->input('cons_str_acc');
            $fiche->int_post_trav = $request->input('int_post_trav');
            $fiche->apt_tech_trav = $request->input('apt_tech_trav');
            $fiche->curio_prof = $request->input('curio_prof');
            $fiche->adress_presi = $request->input('adress_presi');
            $fiche->compr_eff_trav = $request->input('compr_eff_trav');
            $fiche->cap_resou_probl = $request->input('cap_resou_probl');
            $fiche->lang_termi = $request->input('lang_termi');
            $fiche->demon_cohe_cons = $request->input('demon_cohe_cons');
            $fiche->respet_loi_etabliss = $request->input('respet_loi_etabliss');
            $fiche->ponct_tenue_vestim = $request->input('ponct_tenue_vestim');
            $fiche->regul_langa = $request->input('regul_langa');
            $fiche->honnet_resp_publ = $request->input('honnet_resp_publ');
            $fiche->initia_perso = $request->input('initia_perso');
            $fiche->user_id = $userId;
            $fiche->stagiaire_id = $request->input('stagiaire_id');
            // Enregistrer la fiche
            $fiche->save();

            // Rediriger vers la vue avec les fiches

            return redirect()->route('fiches.index')->with('success', 'La fiche a été créée avec succès.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function print(Fiche $fiche)
    {
        return view('admin.pages.fiches.print', compact('fiche'));
    }

    public function show($id)
    {
        // Rechercher la fiche par son ID
        $fiche = Fiche::find($id);

        // Vérifier si la fiche existe
        if (!$fiche) {
            return redirect()->route('fiches.index')->with('error', 'La fiche n\'existe pas.');
        }

        // Retourner la vue d'affichage de la fiche avec les données de la fiche
        return view('admin.pages.fiches.show', compact('fiche'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fiche $fiche)
    {
        dd('choupole');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateficheRequest $request, fiche $fiche)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Rechercher la fiche à supprimer par son ID
        $fiche = Fiche::find($id);

        // Vérifier si la fiche existe
        if (!$fiche) {
            return redirect()->route('fiches.index')->with('error', 'La fiche n\'existe pas.');
        }

        // Supprimer la fiche
        $fiche->delete();

        // Rediriger vers la vue avec les fiches
        return redirect()->route('fiches.index')->with('success', 'La fiche a été supprimée avec succès.');
    }
}
