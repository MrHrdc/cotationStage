<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $departements = [
            "Département de l'administration générale",
            'Département des Ponts et Chaussées',
            'Département de Recherches et Développement',
            'Département financier',
            'Centre de formation et de perfectionnement',
            'Département Gestion et Maintenance des Matériels',
        ];

        foreach ($departements as $departement) {
            Departement::create([
                'nom' => $departement,
            ]);
        }
    }
}
