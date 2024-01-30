<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('sexe');
            $table->string('categorie');
            $table->string('postnom')->nullable();
            $table->string('prenom');
            $table->string('lieu_affection');
            $table->string('domaine_stage');
            $table->string('numerodivision');
            $table->string('institution_provenance');
            $table->string('adresse_domicile');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
