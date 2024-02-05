<?php

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        $divisions = [
            [
                'nom' => 'logistique',
            ],
            [
                'nom' => 'Pont et chausses',
            ],
            [
                'nom' => 'Recherche et developpement',
            ],
            [
                'nom' => 'Administration Generale',
            ],
            [
                'nom' => 'Gestion et Maintenance des Materiels',
            ],
            [
                'nom' => 'Inspection des Infrastructtures',
            ],
            [
                'nom' => 'Protection des Infrastructures Routes',
            ],
            [
                'nom' => 'Marches Infrastures Routieres',
            ],
            [
                'nom' => 'MarchesnEquipementd et Service Divers',
            ],
            [
                'nom' => 'Etudes/Fiscalite et Assurances',
            ],
            [
                'nom' => 'Contentieux',
            ],
            [
                'nom' => 'Audt Technique',
            ],
            [
                'nom' => 'Audit Adm et Finance',
            ],
            [
                'nom' => 'Organisation et Methode de Gestion',
            ],
            [
                'nom' => 'Analyse des Parametres de Gestion',
            ],
            [
                'nom' => 'Construction Ponts et Ouvrages D\'Art',
            ],
            [
                'nom' => 'Exploitation et Maintenance des POnts et Ouvrages',
            ],
            [
                'nom' => 'Etudes des ponts et Ouvrages D\'Art',
            ],
            [
                'nom' => 'Etudes des Routes',
            ],
            [
                'nom' => 'Administration Et Finances',
            ],
            [
                'nom' => 'Recherches Geotechniques',
            ],
            [
                'nom' => 'Recherches Physico-Chimique',
            ],
            [
                'nom' => 'Economique des plans et Projets',
            ],
            [
                'nom' => 'Etudes D\'impact socio-environnemental',
            ],
            [
                'nom' => 'Banques',
            ],
            [
                'nom' => 'Caisse',
            ],
            [
                'nom' => 'Comptabilite',
            ],
            [
                'nom' => 'Budget',
            ],
            [
                'nom' => 'Remuneration',
            ],
            [
                'nom' => 'Gestion des Cadres',
            ],
            [
                'nom' => 'Gestion personnel Materise et Execution',
            ],
            [
                'nom' => 'Selection et Recrutement',
            ],
            [
                'nom' => 'Renforcement des Capcites',
            ],
            [
                'nom' => 'Relation Publiques',
            ],
            [
                'nom' => 'Gestion Patrimoine',
            ],
            [
                'nom' => 'Informatiques et TELECOMMUNICATION',
            ],
            [
                'nom' => 'Medical',
            ],
            [
                'nom' => 'Social',
            ],
            [
                'nom' => 'Construction Navale',
            ],
            [
                'nom' => 'Maintenace et Exploitation',
            ],
            [
                'nom' => 'Administration et Finances',
            ],
            [
                'nom' => 'Logistique',
            ],
            [
                'nom' => 'Tecnique',
            ],
            [
                'nom' => 'Cantonnage Manuel',
            ],
            [
                'nom' => 'Administrtion et finances',
            ],
            [
                'nom' => 'conduteur des Travaux',
            ],
            [
                'nom' => 'Adjoint Administratif et financier',
            ],
            [
                'nom' => 'adjoint Technique',
            ],
            [
                'nom' => 'chef d\'antenne',
            ],
            [
                'nom' => '',
            ],
        ];

        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}
