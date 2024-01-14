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
        'postnom',
        'prenom',
        'lieu_affection',
        'domaine_stage',
        'institution_provenance',
        'date_debut',
        'date_fin',
    ];

    public function fiche()
    {
        return $this->belongsTo(Fiche::class);
    }
}
