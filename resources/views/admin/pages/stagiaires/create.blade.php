@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
  <h1>Stagiaires</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('index')}}">Accueil</a></li>
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
            <div class="col-md-5">
              <label for="inputSexe" class="form-label">Sexe</label>
              <select class="form-control" name="sexe" id="inputSexe">
                <option value="null">Selectionnez votre Sexe</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputSexe" class="form-label">Sexe</label>
              <select class="form-control" name="sexe" id="inputSexe">
                <option value="null">Selectionnez votre categorie</option>
                <option value="homme">Academique</option>
                <option value="femme">Professionnelle</option>
              </select>
            <div class="col-md-12">
              <label for="inputPostnom" class="form-label">Postnom</label>
              <input type="text" class="form-control" name="postnom" id="inputPostnom">
            </div>
            <div class="col-md-12">
              <label for="inputPrenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" name="prenom" id="inputPrenom">
            </div>
            <div class="col-md-12">
              <label for="inputLieuAffection" class="form-label">Lieu d'affection</label>
              <input type="text" class="form-control" name="lieu_affection" id="inputLieuAffection">
            </div>
            <div class="col-md-12">
              <label for="inputDomaineStage" class="form-label">Domaine du stage</label>
              <input type="text" class="form-control" name="domaine_stage" id="inputDomaineStage">
            </div>
            <div class="col-md-12">
              <label for="inputNumerodivision" class="form-label">Numero division</label>
              <input type="text" class="form-control" name="domaine_stage" id="inputNumerodivision">
            </div>
            <div class="col-md-12">
              <label for="inputInstitutionProvenance" class="form-label">Institution de provenance</label>
              <input type="text" class="form-control" name="institution_provenance" id="inputInstitutionProvenance">
            </div>
            <div class="col-md-12">
              <label for="inputAdressedomicilee" class="form-label">adresse Domicile</label>
              <input type="text" class="form-control" name="domaine_stage" id="inputAdressedomicile">
            </div>
            <div class="col-md-12">
              <label for="inputDateDebut" class="form-label">Date de début</label>
              <input type="date" class="form-control" name="date_debut" id="inputDateDebut">
            </div>
            <div class="col-md-12">
              <label for="inputDateFin" class="form-label">Date de fin</label>
              <input type="date" class="form-control" name="date_fin" id="inputDateFin">
            </div>
            <div class="text-right mt-2">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
    </div>
  </div>
</section>

@endsection