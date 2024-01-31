<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'sexe',
        'categorie',
        'postnom',
        'prenom',
        'lieu_affection',
        'domaine_stage',
        'numerodivision',
        'institution_provenance',
        'adresse_domicile',
        'date_debut',
        'date_fin',
    ];

    public function fiche()
    {
        return $this->hasOne(Fiche::class, 'stagiaire_id');
    }
}
