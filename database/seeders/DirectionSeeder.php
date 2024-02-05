<?php

use App\Models\Direction;
use Illuminate\Database\Seeder;

class DirectionsTableSeeder extends Seeder
{
    public function run()
    {
        $directions = [
            [
                'nom' => 'Direction GENERALE',
                'division_id' => 1,
            ],
            [
                'nom' => 'Direction COLLEGE DES CONSEILERS',
                'division_id' => 2,
            ],
            [
                'nom' => 'Direction GESTION DES MARCHES',
                'division_id' => 3,
            ],
            [
                'nom' => 'Direction CELLLUE D\'INSPECTION ET PROTECTION DES INFRASTRUCTURE ROUTIERS',
                'division_id' => 4,
            ],
            [
                'nom' => 'Direction DES AFFAIRES JURIDIQUE',
                'division_id' => 5,
            ],
            [
                'nom' => 'Direction de cellule de Partenariat Public-Privé et Gestion des Ressources Extérieures',
                'division_id' => 6,
            ],
            [
                'nom' => 'Direction de l\'Audit Interne',
                'division_id' => 7,
            ],
            [
                'nom' => 'Direction de l\'Organisation et Controle de Gestion',
                'division_id' => 8,
            ],
            [
                'nom' => 'Direction des Etudes Technique',
                'division_id' => 9,
            ],
            [
                'nom' => 'Direction des Ponts',
                'division_id' => 10,
            ],
            [
                'nom' => 'Direction des Chaussees',
                'division_id' => 11,
            ],
            [
                'nom' => 'Direction laboratoire nationaux des travaux publics',
                'division_id' => 12,
            ],
            [
                'nom' => 'Direction laboratoire national des travaux publics',
                'division_id' => 13,
            ],
            [
                'nom' => 'Direction Planification et etudes Generales',
                'division_id' => 14,
            ],
            [
                'nom' => 'Direction Tresorie',
                'division_id' => 15,
            ],
            [
                'nom' => 'Direction Comptabilite et Budget',
                'division_id' => 16,
            ],
            [
                'nom' => 'Direction de resources Humaines',
                'division_id' => 17,
            ],
            [
                'nom' => 'Direction Formation',
                'division_id' => 18,
            ],
            [
                'nom' => 'Direction services Generaux',
                'division_id' => 19,
            ],
            [
                'nom' => 'Direction Médico-sociale',
                'division_id' => 20,
            ],
            [
                'nom' => 'Direction Materiels Flottants',
                'division_id' => 21,
            ],
            [
                'nom' => 'Direction Materiels Roulants',
                'division_id' => 22,
            ],
            [
                'nom' => 'Direction provinciale',
                'division_id' => 23,
            ],
            [
                'nom' => 'Direction Technique',
                'division_id' => 24,
            ],
            [
                'nom' => 'Direction Cantonnage Manuel',
                'division_id' => 25,
            ],
            [
                'nom' => 'Direction Admnistrattion et Finances',
                'division_id' => 26,
            ],
            [
                'nom' => 'Direction conducteur des Travaux',
                'division_id' => 27,
            ],
            [
                'nom' => 'Direction Adjoint Techniques',
                'division_id' => 28,
            ],
            [
                'nom' => 'Direction Adjoint Administratif et Financier',
                'division_id' => 29,
            ],
            [
                'nom' => 'Direction Chef D\'antenne',
                'division_id' => 30,
            ],
        ];

        foreach ($directions as $direction) {
            Direction::create($direction);
        }
    }
}
