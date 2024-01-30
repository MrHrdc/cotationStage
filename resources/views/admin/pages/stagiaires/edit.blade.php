@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Stagiaires</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Stagiaires</li>
      <li class="breadcrumb-item active">Édition</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Édition</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{ route('stagiaires.update', $stagiaire->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-6">
              <label for="inputNom" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="inputNom" value="{{ $stagiaire->nom }}">
            </div>
            <div class="col-md-6">
              <label for="inputSexe" class="form-label">Sexe</label>
              <select class="form-control" name="sexe" id="inputSexe">
                <option value="">Selectionnez votre Sexe</option>
                <option value="homme" @if($stagiaire->sexe == 'homme') selected @endif>Homme</option>
                <option value="femme" @if($stagiaire->sexe == 'femme') selected @endif>Femme</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputCategorie" class="form-label">Categorie</label>
              <select class="form-control" name="categorie" id="inputCategorie">
                <option value="">Selectionnez votre categorie</option>
                <option value="academique" @if($stagiaire->categorie == 'academique') selected @endif>Academique</option>
                <option value="professionnelle" @if($stagiaire->categorie == 'professionnelle') selected @endif>Professionnelle</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputPostnom" class="form-label">Postnom</label>
              <input type="text" class="form-control" name="postnom" id="inputPostnom" value="{{ $stagiaire->postnom }}">
            </div>
            <div class="col-md-6">
              <label for="inputPrenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" name="prenom" id="inputPrenom" value="{{ $stagiaire->prenom }}">
            </div>
            <div class="col-md-6">
              <label for="inputLieuAffection" class="form-label">Lieu d'affection</label>
              <input type="text" class="form-control" name="lieu_affection" id="inputLieuAffection" value="{{ $stagiaire->lieu_affection }}">
            </div>
            <div class="col-md-6">
              <label for="inputDomaineStage" class="form-label">Domaine du stage</label>
              <input type="text" class="form-control" name="domaine_stage" id="inputDomaineStage" value="{{ $stagiaire->domaine_stage }}">
            </div>
            <div class="col-md-6">
              <label for="inputNumerodivision" class="form-label">Numero division</label>
              <input type="text" class="form-control" name="numerodivision" id="inputNumerodivision" value="{{ $stagiaire->numerodivision }}">
            </div>
            <div class="col-md-6">
              <label for="inputInstitutionProvenance" class="form-label">Institution de provenance</label>
              <input type="text" class="form-control" name="institution_provenance" id="inputInstitutionProvenance" value="{{ $stagiaire->institution_provenance }}">
            </div>
            <div class="col-md-6">
              <label for="inputAdresseDomicile" class="form-label">Adresse Domicile</label>
              <input type="text" class="form-control" name="adresse_domicile" id="inputAdresseDomicile" value="{{ $stagiaire->adresse_domicile }}">
            </div>
            <div class="col-md-6">
              <label for="inputDateDebut" class="form-label">Date de début</label>
              <input type="date" class="form-control" name="date_debut" id="inputDateDebut" value="{{ $stagiaire->date_debut }}">
            </div>
            <div class="col-md-6">
              <label for="inputDateFin" class="form-label">Date de fin</label>
              <input type="date" class="form-control" name="date_fin" id="inputDateFin" value="{{ $stagiaire->date_fin }}">
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>
          <!-- End Vertical Form -->
          
        </div>
      </div>
    </div>
  </div>
</section>
@endsection