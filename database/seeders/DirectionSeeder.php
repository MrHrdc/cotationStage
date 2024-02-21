<?php

namespace Database\Seeders;

use App\Models\Direction;
use App\Models\Departement;
use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
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

        $directions = [
            'DIRECTION GENERALES',
            'DIRECTION DE GESTION DES MARCHES',
            'DIRECTION AFFAIRES JURIDIQUES',
            'DIRECTION AUDIT',
            'DIRECTION ORGANISATION ET CONTRÔLE DE GESTION',
            'CELLULE D’INSPECTION ET PROTECTION DES INFRASTRUCTURES ROUTIÈRES',
            'DIRECTION DES PONTS',
            'DIRECTION DES ÉTUDES TECHNIQUES',
            'DIRECTION DES CHAUSSÉES',
            'DIRECTION DU LABORATOIRE NATIONAL DES TRAVAUX PUBLICS',
            'DIRECTION DE LA PLANIFICATION ET DES ETUDES GÉNÉRALES',
            'DIRECTION TRÉSORERIE',
            'DIRECTION COMPTABILITÉ ET BUDGET',
            'DIRECTION RESSOURCES HUMAINES',
            'DIRECTION FORMATION',
            'DIRECTION DE SERVICE GÉNÉRAUX',
            'DIRECTION MÉDICO-SOCIALE',
            'DIRECTION MATÉRIELS FLOTTANTS',
            'DIRECTION MATÉRIELS ROULANTS',
            'DIRECTION PROVINCIALE',
            'CHEF DE BRIGADE',
            'CENTRE MATÉRIELS ROULON ET FLOTTANT',
            'CENTRE DE FORMATION ET DE PERFECTIONNEMENT',
        ];

        // Créer les départements
        foreach ($departements as $departement) {
            Departement::create([
                'nom' => $departement,
            ]);
        }

        // Associer les directions aux départements correspondants
        $departements = Departement::pluck('id', 'nom');

        foreach ($directions as $direction) {
            $departementNom = $this->getDepartementNom($direction);
            $departementId = $departements[$departementNom];

            Direction::create([
                'nom' => $direction,
                'departement_id' => $departementId,
            ]);
        }
    }

    /**
     * Retourne le nom du département correspondant à la direction.
     */
    private function getDepartementNom($direction)
    {
        if (strpos($direction, 'DIRECTION GENERALES') !== false) {
            return "Département de l'administration générale";
        } elseif (strpos($direction, 'DIRECTION DES PONTS') !== false || strpos($direction, 'DIRECTION DES ÉTUDES TECHNIQUES') !== false || strpos($direction, 'DIRECTION DES CHAUSSÉES') !== false) {
            return 'Département des Ponts et Chaussées';
        } elseif (strpos($direction, 'DIRECTION DU LABORATOIRE NATIONAL DES TRAVAUX PUBLICS') !== false || strpos($direction, 'DIRECTION DE LA PLANIFICATION ET DES ETUDES GÉNÉRALES') !== false) {
            return 'Département de Recherches et Développement';
        } elseif (strpos($direction, 'DIRECTION TRÉSORERIE') !== false || strpos($direction, 'DIRECTION COMPTABILITÉ ET BUDGET') !== false) {
            return 'Département financier';
        } elseif (strpos($direction, 'DIRECTION RESSOURCES HUMAINES') !== false || strpos($direction, 'DIRECTION FORMATION') !== false || strpos($direction, 'DIRECTION DE SERVICE GÉNÉRAUX') !== false || strpos($direction, 'DIRECTION MÉDICO-SOCIALE') !== false) {
            return 'Centre de formation et de perfectionnement';
        } elseif (strpos($direction, 'DIRECTION MATÉRIELS FLOTTANTS') !== false || strpos($direction, 'DIRECTION MATÉRIELS ROULANTS') !== false || strpos($direction, 'DIRECTION PROVINCIALE') !== false || strpos($direction, 'CHEF DE BRIGADE') !== false || strpos($direction, 'CENTRE MATÉRIELS ROULON ET FLOTTANT') !== false || strpos($direction, 'CENTRE DE FORMATION ET DE PERFECTIONNEMENT') !== false) {
            return 'Département Gestion et Maintenance des Matériels';
        }

        // Si aucune correspondance n'est trouvée, retourner un département par défaut (vous pouvez le personnaliser)
        return "Département de l'administration générale";
    }
}
