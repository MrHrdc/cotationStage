<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $fillable = ['nom', ];

    public function stagiaire()
    {
        return $this->hasMany(stagiaire::class);
    }
}
