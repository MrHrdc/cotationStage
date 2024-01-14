<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    use HasFactory;

    protected $fillable = [
        'cons_str_acc',
        'int_post_trav',
        'apt_tech_trav',
        'curio_prof',
        'adress_presi',
        'compr_eff_trav',
        'cap_resou_probl',
        'lang_termi',
        'demon_cohe_cons',
        'respet_loi_etabliss',
        'ponct_tenue_vestim',
        'regul_langa',
        'honnet_resp_publ',
        'initia_perso',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stagiaire()
    {
        return $this->hasOne(Stagiaire::class);
    }
}
