@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Utilisateurs</li>
      <li class="breadcrumb-item active">Création</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Création d'un utilisateur</h5>

          <!-- User Creation Form -->
          <form method="POST" action="{{ route('agents.store') }}">
            @csrf
            <div class="row">
              <div class="col-6">
                <label for="inputNom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="inputNom" name="nom" required>
              </div>
              <div class="col-md-6">
                <label for="inputPostnom" class="form-label">Postnom</label>
                <input type="text" class="form-control" id="inputPostnom" name="postnom" required>
            </div>
              <div class="col-md-6">
                <label for="inputprenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="inputMatricule" name="prenom" required>
              </div>
              <div class="col-md-6">
              <label for="inputSexe" class="form-label">Departement</label>
              <select class="form-control" name="sexe" id="inputSexe">
                <option value="null">Selectionnez votre Departement</option>
                <option value="homme"></option>
                <option value="femme"></option>
              </select>
</div>
              <div class="col-md-6">
              <label for="inputSexe" class="form-label">Direction</label>
              <select class="form-control" name="sexe" id="inputSexe">
                <option value="null">Selectionnez votre Direction</option>
                <option value="homme"></option>
                <option value="femme"></option>
              </select>
</div>
              <div class="col-6">
                <label for="inputGrde" class="form-label">Grade</label>
                <input type="text" class="form-control" id="inputNom" name="grade" required>
</div>
              <div class="col-md-6">
              <label for="inputpool" class="form-label">Service</label>
              <select class="form-control" name="pool" id="inputpool">
                <option value="null">Selectionnez votre Service</option>
                <option value="homme">Pool Conseiller Routes</option>
                <option value="femme">Pool Conseiller Materiel</option>
                <option value="homme">Pool Conseiller Adminitrative</option>
                <option value="femme">Pool Financements multilateraux et bilateraux</option>
                <option value="homme">Pool Financements privés</option>
                <option value="femme">Pool Projet sur  financements multilateraux et bilateraux</option>
                <option value="homme">Pool Projet sur financements privés</option>
                <option value="femme">Pool Inspecteur routière</option>
                <option value="homme">Pool Inspecteur ponts et ouvrages d'art</option>
                <option value="femme">Pool Controle et securité routière</option>
                <option value="homme">Pool Vulgarisation et formations</option>
                <option value="femme">Pool Aspect juridique et contentieux</option>
                <option value="homme">Pool Prepation des marches</option>
                <option value="femme">Pool Passations des marches</option>
                <option value="homme">Pool Suivi et Excution des marches</option>
                <option value="femme">Pool Fiscalite et Assurance</option>
                <option value="femme">Pool Etudes juridique et contrats</option>
                <option value="femme">Pool Contentieux Adminitrative et lit IG ES divers </option>
                <option value="femme">Pool Contentieux juridique </option>
                <option value="femme">Pool Auditeurs</option>
                <option value="femme">Pool Organisation de Gstion</option>
                <option value="femme">Pool Controleurs de Gestion</option>
                <option value="femme">Service de Programmation </option>
                <option value="femme">service de travaux</option>
                <option value="femme">service d'exploitation</option>
                <option value="femme">service de maintenance</option>
                <option value="femme">service Etudes ponts </option>
                <option value="femme">service d'ouvrage d'art</option>
                <option value="femme">service Etudes routes</option>
                <option value="femme">service topographie</option>
                <option value="femme">service Administratifs</option>
                <option value="femme">service commercial</option>
                <option value="femme">service comptabilité tresorerie</option>
                <option value="femme">service stabilisation</option>
                <option value="femme">service Auscultation et dimesionnement </option>
                <option value="femme">service Sodage et forage</option>
                <option value="femme">service Essaie physique</option>
                <option value="femme">service Essaie Chimiques</option>
                <option value="femme">service Geomatique</option>
                <option value="femme">service Etudes Economique</option>
                <option value="femme">service Etudes d'impacts Environnementale</option>
                <option value="femme">service Controle et suvi Environnementale et social</option>
                <option value="femme">service Paie Cadres</option>
                <option value="femme">service Paie Matrises et Exécution</option>
                <option value="femme">service Gestion des Agents Passif</option>
                <option value="femme">service Admin Gestion. Cadre de interprof</option>
                <option value="femme">service Admin Gestion. Cadre de DIR</option>
                <option value="femme">service Admin Gestion. Cadre de COLLAB</option>
                <option value="femme">service contentieux et relation interpof</option>
                <option value="femme">service Gestion collective et previsiooelle</option>
                <option value="femme">service Gestion.AGTS Matrise</option>
                <option value="femme">service Gestion.AGTS Execution</option>
                <option value="femme">service Recreutement</option>
                <option value="femme">service Orientation et reconvession Proffessionelle</option>
                <option value="femme">service Programmationet suivi</option>
                <option value="femme">service formation des formateurs et suivi</option>
                <option value="femme">service</option>
                <option value="femme">service</option>
                <option value="femme">service</option>
                <option value="femme">service</option>
                <option value="femme">service</option>
                <option value="femme">service</option>
                <option value="femme">service</option>
                <option value="femme">service</option>





              </select>
</div>
              <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" required>
              </div>
              <div class="col-6">
                <label for="inputmatricule" class="form-label">Matricule</label>
                <input type="text" class="form-control" id="inputPrenom" name="matricule" required>
              </div>
              <div class="col-6">
                <label for="inputPassword" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword" name="password" required>
              </div>
              <div class="col-md-6">
                <label for="inputFonction" class="form-label">Fonction</label>
                <select class="form-control" id="inputFonction" name="fonction_id" required>
                  @foreach ($fonctions as $fonction)
                    <option value="{{ $fonction->id }}">{{ $fonction->name }}</option>
                  @endforeach
                </select>
              </div>
            <div class="text-right mt-2">
              <button type="submit" class="btn btn-primary">Créer</button>
              <button type="reset" class="btn btn-secondary">Réinitialiser</button>
            </div>
          </form><!-- End User Creation Form -->

        </div>
      </div>
    </div>
  </div>
</section>

@endsection