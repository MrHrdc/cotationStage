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
              <select class="form-control" name="departement" id="inputdepartment">
                <option value="null">Selectionnez votre Departement </option>
                <option value="Departement">Departement de L'administration Gerenale</option>
                <option value="Departement">Departement des Ponts et Chaussées</option>
                <option value="Departement">Departement de Recherches et Developpement</option>
                <option value="Departement">Departement financier</option>
                <option value="Departement">Centre de formation et de perfectionnement </option>
                <option value="Departement">Departement Gestion et Maintenance des Materiels </option>
              </select>
</div>
              <div class="col-md-6">
              <label for="inputSexe" class="form-label">Direction</label>
              <select class="form-control" name="sexe" id="inputSexe">
                <option value="null">Selectionnez votre Direction</option>
                <option value="Direction">Direction GENERALE</option>
                <option value="Direction">Direction COLLEGE DES CONSEILERS</option>
                <option value="Direction">Direction GESTION DES MARCHES</option>
                <option value="Direction">Direction CELLLUE D'INSPECTION ET PROTECTION DES INFRASTRUCTURE ROUTIERS</option> 
                <option value="Direction">Direction DES AFFAIRES JURIDIQUE</option>
                <option value="Direction">Direction de cellule de Partenariat Public-Privé et Gestion des Ressources Extérieures </option>
                <option value="Direction">Direction de l'Audit Interne</option>
                <option value="Direction">Direction de l'Organisation et Controle de Gestion</option>
                <option value="Direction">Direction des Etudes Technique</option>
                <option value="Direction">Direction des Ponts</option>
                <option value="Direction">Direction des Chaussees</option>
                <option value="Direction">Direction laboratoire nationaux des travaux publics</option>
                <option value="Direction">Direction laboratoire national des travaux publics</option>
                <option value="Direction">Direction Planification et etudes Generales</option>
                <option value="Direction">Direction Tresorie</option>
                <option value="Direction">Direction Comptabilite et Budget</option>
                <option value="Direction">Direction de resources Humaines</option>
                <option value="Direction">Direction Formation</option>
                <option value="Direction">Direction services Generaux</option>
                <option value="Direction">Direction Médico-sociale</option>
                <option value="Direction">Direction Materiels Flottants</option>
                <option value="Direction">Direction Materiels Roulants</option>
                <option value="Direction">Direction provinciale</option>
                <option value="Direction">Direction Technique </option>
                <option value="Direction">Direction Cantonnage Manuel</option>
                <option value="Direction">Direction Admnistrattion et Finances</option>
                <option value="Direction">Direction conducteur des Travaux </option>
                <option value="Direction">Direction Adjoint Techniques</option>
                <option value="Direction">Direction Adjoint Administratif et Financier</option>
                <option value="Direction">Direction Chef D'antenne</option>
              </select>
</div>
              <div class="col-6">
                <label for="inputGrde" class="form-label">Grade</label>
                <input type="text" class="form-control" id="inputNom" name="grade" required>
</div>
<div class="col-md-6">
              <label for="inputSexe" class="form-label">Division</label>
              <select class="form-control" name="division" id="inputdivision">
                <option value="null">Selectionnez votre Division</option>
                <option value="division">logistique</option>
                <option value="division">Pont et chausses </option>
                <option value="division">Recherche et developpement</option>
                <option value="division">Administration Generale</option>
                <option value="division">Gestion et Maintenance des Materiels</option>
                <option value="division">Inspection des Infrastructtures</option>
                <option value="division">Protection des Infrastructures Routes</option>
                <option value="division">Marches Infrastures Routieres</option>
                <option value="division">MarchesnEquipementd et Service Divers</option>
                <option value="division">Etudes/Fiscalite et Assurances</option>
                <option value="division">Contentieux</option>
                <option value="division">Audt Technique</option>
                <option value="division">Audit Adm et Finance</option>
                <option value="division">Organisation et Methode de  Gestion</option>
                <option value="division">Analyse des Parametres de Gestion</option>
                <option value="division">Construction Ponts et Ouvrages D'Art</option>
                <option value="division">Exploitation et Maintenance des POnts et Ouvrages</option>
                <option value="division">Etudes des ponts et Ouvrages D'Art</option>
                <option value="division">Etudes des Routes</option>
                <option value="division">Administration Et Finances</option>
                <option value="division">Recherches Geotechniques</option>
                <option value="division">Recherches Physico-Chimique</option>
                <option value="division">Economique des plans et Projets</option>
                <option value="division">Etudes D'impact socio-environnemental</option>
                <option value="division">Banques</option>
                <option value="division">Caisse</option>
                <option value="division">Comptabilite</option>
                <option value="division">Budget</option>
                <option value="division">Remuneration</option>
                <option value="division">Gestion des Cadres</option>
                <option value="division">Gestion personnel Materise et Execution</option>
                <option value="division">Selection et Recrutement</option>
                <option value="division">Renforcement  des Capcites</option>
                <option value="division">Relation Publiques</option>
                <option value="division">Gestion Patrimoine</option>
                <option value="division">Informatiques et TELECOMMUNICATION</option>
                <option value="division">Medical</option>
                <option value="division">Social</option>
                <option value="division">Construction Navale</option>
                <option value="division">Maintenace et Exploitation</option>
                <option value="division">Administration et Finances</option>
                <option value="division">Logistique</option>
                <option value="division">Tecnique</option>
                <option value="division">Cantonnage Manuel</option>
                <option value="division">Administrtion et finances</option>
                <option value="division">conduteur des Travaux</option>
                <option value="division">Adjoint Administratif et financier</option>
                <option value="division">adjoint Technique</option>
                <option value="division">chef d'antenne</option>
                <option value="division"></option>
              </select>
</div>
              <div class="col-md-6">
              <label for="inputpool" class="form-label">Service</label>
              <select class="form-control" name="service" id="inputservice">
                <option value="null">Selectionnez votre Service</option>
                <option value="service">Pool Conseiller Routes</option>
                <option value="service">Pool Conseiller Materiel</option>
                <option value="service">Pool Conseiller Adminitrative</option>
                <option value="service">Pool Financements multilateraux et bilateraux</option>
                <option value="service">Pool Financements privés</option>
                <option value="service">Pool Projet sur  financements multilateraux et bilateraux</option>
                <option value="service">Pool Projet sur financements privés</option>
                <option value="service">Pool Inspecteur routière</option>
                <option value="service">Pool Inspecteur ponts et ouvrages d'art</option>
                <option value="service">Pool Controle et securité routière</option>
                <option value="service">Pool Vulgarisation et formations</option>
                <option value="service">Pool Aspect juridique et contentieux</option>
                <option value="service">Pool Prepation des marches</option>
                <option value="service">Pool Passations des marches</option>
                <option value="service">Pool Suivi et Excution des marches</option>
                <option value="service">Pool Fiscalite et Assurance</option>
                <option value="service">Pool Etudes juridique et contrats</option>
                <option value="service">Pool Contentieux Adminitrative et lit IG ES divers </option>
                <option value="service">Pool Contentieux juridique </option>
                <option value="service">Pool Auditeurs</option>
                <option value="service">Pool Organisation de Gstion</option>
                <option value="service">Pool Controleurs de Gestion</option>
                <option value="service">Pool Auditeurs Technique</option>
                <option value="service">Pool Audoteurs administrative te finance</option>
                <option value="service">Service de Programmation </option>
                <option value="service">service de travaux</option>
                <option value="service">service d'exploitation</option>
                <option value="service">service de maintenance</option>
                <option value="service">service Etudes ponts </option>
                <option value="service">service d'ouvrage d'art</option>
                <option value="service">service Etudes routes</option>
                <option value="service">service topographie</option>
                <option value="service">service Administratifs</option>
                <option value="service">service commercial</option>
                <option value="service">service comptabilité tresorerie</option>
                <option value="service">service stabilisation</option>
                <option value="service">service Auscultation et dimesionnement </option>
                <option value="service">service Sodage et forage</option>
                <option value="service">service Essaie physique</option>
                <option value="service">service Essaie Chimiques</option>
                <option value="service">service Geomatique</option>
                <option value="service">service plan directeur</option>
                <option value="service">service Etudes Economique</option>
                <option value="service">service Etudes d'impacts Environnementale</option>
                <option value="service">service Controle et suvi Environnementale et social</option>
                <option value="service">service financement tresor public</option>
                <option value="service">service finanacement divers</option>
                <option value="service">service Guichet</option>
                <option value="service">service Documentation et verification</option>
                <option value="service">service comptabilite direction generale</option>
                <option value="service">service Comptabilite Provinces</option>
                <option value="service">service comptabilite analytique</option>
                <option value="service">service suivi et controle</option>
                <option value="service">service Paie Cadres</option>
                <option value="service">service Paie Matrises et Exécution</option>
                <option value="service">service Gestion des Agents Passif</option>
                <option value="service">service Administratif de Gestion. Cadre de interprof</option>
                <option value="service">service Admin Gestion. Cadre de DIR</option>
                <option value="service">service Admin Gestion. Cadre de Collaborateur</option>
                <option value="service">service contentieux et relation interpof</option>
                <option value="service">service Gestion collective et previsiooelle</option>
                <option value="service">service Gestion.AGTS Matrise</option>
                <option value="service">service Gestion.AGTS Execution</option>
                <option value="service">service Recreutement</option>
                <option value="service">service Orientation et reconvession Proffessionelle</option>
                <option value="service">service Programmationet suivi</option>
                <option value="service">service formation des formateurs et suivi et suivi des activites de CFP</option>
                <option value="service">service fichier de Formation</option>
                <option value="service">service protocol et voyages</option>
                <option value="service">service Communication et Presse</option>
                <option value="service">service coordination provincial et courrier</option>
                <option value="service">service D'archivages</option>
                <option value="service">service Appprovisionnement</option>
                <option value="service">service intendance</option>
                <option value="service">service Entretien</option>
                <option value="service">service securite et suiveillance</option>
                <option value="service">service Gestion Informatique</option>
                <option value="service">service Maintenance</option>
                <option value="service">service nursing</option>
                <option value="service">service Activites Paracliniques</option>
                <option value="service">service Administratif et Financier</option>
                <option value="service">service Social</option>
                <option value="service">service Cantine sport et loisir</option>
                <option value="service">service Telecommunication</option>
                <option value="service">service Chef Mecanicien</option>
                <option value="service">service Chef Magasinier</option>
                <option value="service">service chefs de chantier</option>
                <option value="service">service caissiere</option>
                <option value="service">service chef du Personnel</option>
                <option value="service">service Recherches physico-Chimiques</option>
                <option value="service">service Administration et finances</option>
                <option value="service">service Recherches Geotechniques</option>
                <option value="service">service Etudes, programmation et suivi travaux construction Rehabilitation </option>
                <option value="service">service Electromecanique</option>
                <option value="service">service Exploitation et Armement Bacs</option>
                <option value="service">service Maintenaces Bacs</option>
                <option value="service">service Administartif</option>
                <option value="service">service comptabilite et tresorerie</option>
                <option value="service">service Magasin Materiels Bacs</option>
                <option value="service">service Etudes</option>
                <option value="service">Achats Locaux</option>
                <option value="service">Maintenance Routes</option>
                <option value="service">Expliotation Routes</option>
                <option value="service">Expliotation et Programmation</option>
                <option value="service">inspection, Controle et Protection des Infrastructures Routieres</option>
                <option value="service">Environnement</option>
                <option value="service">Chef du Personnel </option>
                <option value="service">Comptabilite Provinciale</option>
                <option value="service">Comptable</option>
                <option value="service">caissier</option>
                <option value="service">Assistants Techniques Route</option>
                <option value="service">Assistants Techniques Bacs</option>
                <option value="service">service Chef D'Antenne Routes</option>
                <option value="service">service Unite D'Asphaltage et de Concassage</option>
                <option value="service">service chef D'atelier de Reparation</option>
                <option value="service">service Chef de section VL</option>
                <option value="service">service Mecaniciens</option>
                <option value="service">service Chef de section Machine Outil</option>
                <option value="service">service Quado</option>
                <option value="service">service Labo Diesel</option>
                <option value="service">Electricite</option>
                <option value="service">service Chauffeurs VL</option>
                <option value="service">surveillance</option>
                <option value="service">Huissier</option>
                <option value="service">Atelier Techniques</option>
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