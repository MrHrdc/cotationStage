<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateficheRequest;
use App\Models\fiche;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.pages.fiches.index");
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
        dd('choupole');
    }

    /**
     * Display the specified resource.
     */
    public function show(fiche $fiche)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fiche $fiche)
    {
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
    public function destroy(fiche $fiche)
    {
    }
}
