@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
   <h1>Stagiaires</h1>
   <nav>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
         <li class="breadcrumb-item">Stagiaires</li>
         <li class="breadcrumb-item active">Voir</li>
      </ol>
   </nav>
</div>
<section class="section">
   <div class="row">
   <div class="col-lg-12">
   <div class="card">
      <div class="card-body">
         <h5 class="card-title">Détails du stagiaire</h5>
         <div class="row">
            <div class="col-6">
               <div class="form-group">
                  <label for="inputNom">Nom</label>
                  <input type="text" class="form-control" id="inputNom" value="{{ $stagiaire->nom }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputSexe">Sexe</label>
                  <input type="text" class="form-control" id="inputSexe" value="{{ $stagiaire->sexe }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputCategorie">Catégorie</label>
                  <input type="text" class="form-control" id="inputCategorie" value="{{ $stagiaire->categorie }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputPostnom">Postnom</label>
                  <input type="text" class="form-control" id="inputPostnom" value="{{ $stagiaire->postnom }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputPrenom">Prénom</label>
                  <input type="text" class="form-control" id="inputPrenom" value="{{ $stagiaire->prenom }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputLieuAffection">Lieu d'affection</label>
                  <input type="text" class="form-control" id="inputLieuAffection" value="{{ $stagiaire->lieu_affection }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputDomaineStage">Domaine du stage</label>
                  <input type="text" class="form-control" id="inputDomaineStage" value="{{ $stagiaire->domaine_stage }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputNumerodivision">Numéro de division</label>
                  <input type="text" class="form-control" id="inputNumerodivision" value="{{ $stagiaire->numerodivision }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputInstitutionProvenance">Institution de provenance</label>
                  <input type="text" class="form-control" id="inputInstitutionProvenance" value="{{ $stagiaire->institution_provenance }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputAdresseDomicile">Adresse domicile</label>
                  <input type="text" class="form-control" id="inputAdresseDomicile" value="{{ $stagiaire->adresse_domicile }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputDateDebut">Date de début</label>
                  <input type="text" class="form-control" id="inputDateDebut" value="{{ $stagiaire->date_debut }}" readonly>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="inputDateFin">Date de fin</label>
                  <input type="text" class="form-control" id="inputDateFin" value="{{ $stagiaire->date_fin }}" readonly>
               </div>
            </div>
            <div class="text-center">
               <a href="{{ route('stagiaires.edit', $stagiaire->id) }}" class="btn btn-primary">Modifier</a>
               <form action="{{ route('stagiaires.destroy', $stagiaire->id) }}" method="POST" style="display: inline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce stagiaire ?')">Supprimer</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection