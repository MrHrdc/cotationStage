@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
  <h1>Stagiaires</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Stagiaires</li>
      <li class="breadcrumb-item active">Création</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Création</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{ route('stagiaires.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
              <label for="inputNom" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="inputNom">
            </div>
            <div class="col-md-6">
              <label for="inputSexe" class="form-label">Sexe</label>
              <select class="form-control" name="sexe" id="inputSexe">
                <option value="null">Selectionnez votre Sexe</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputCategorie" class="form-label">Catégorie</label>
              <select class="form-control" name="categorie" id="inputCategorie">
                <option value="null">Selectionnez votre catégorie</option>
                <option value="academique">Académique</option>
                <option value="professionnelle">Professionnelle</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputPostnom" class="form-label">Postnom</label>
              <input type="text" class="form-control" name="postnom" id="inputPostnom">
            </div>
            <div class="col-md-6">
              <label for="inputPrenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" name="prenom" id="inputPrenom">
            </div>
            <div class="col-md-6">
              <label for="inputLieuAffection" class="form-label">Lieu d'affection</label>
              <input type="text" class="form-control" name="lieu_affection" id="inputLieuAffection">
            </div>
            <div class="col-md-6">
              <label for="inputDomaineStage" class="form-label">Domaine du stage</label>
              <input type="text" class="form-control" name="domaine_stage" id="inputDomaineStage">
            </div>
            <div class="col-md-6">
              <label for="inputNumeroDivision" class="form-label">Numéro division</label>
              <input type="text" class="form-control" name="numero_division" id="inputNumeroDivision">
            </div>
            <div class="col-md-6">
              <label for="inputInstitutionProvenance" class="form-label">Institution de provenance</label>
              <input type="text" class="form-control" name="institution_provenance" id="inputInstitutionProvenance">
            </div>
            <div class="col-md-6">
              <label for="inputAdresseDomicile" class="form-label">Adresse domicile</label>
              <input type="text" class="form-control" name="adresse_domicile" id="inputAdresseDomicile">
            </div>
            <div class="col-md-6">
              <label for="inputDateDebut" class="form-label">Date de début</label>
              <input type="date" class="form-control" name="date_debut" id="inputDateDebut">
            </div>
            <div class="col-md-6">
              <label for="inputDateFin" class="form-label">Date de fin</label>
              <input type="date" class="form-control" name="date_fin" id="inputDateFin">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Créer</button>
              <button type="reset" class="btn btn-secondary">Réinitialiser</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
    </div>
  </div>
</section>

@endsection