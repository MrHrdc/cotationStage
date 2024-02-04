<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = ['nom', ];

    
    public function agent()
    {
        return $this->hasMany(agent::class);
    }

}
