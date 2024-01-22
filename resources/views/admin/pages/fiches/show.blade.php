@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Fiche</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Fiche</li>
      <li class="breadcrumb-item active">Détails</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Détails de la fiche</h5>
          <div class="row border_row">
            <div class="col-12">
                <legend>Information du Stagiaire:</legend>
                <div class="row">
                  <div class="col-4">
                    <label for="fname">Nom:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->nom }}" readonly id="fname" >
                  </div>
                  <div class="col-4">
                    <label for="fname">Post-nom:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->postnom }}" readonly id="fname" >
                  </div>
                  <div class="col-4">
                    <label for="fname">Prénom:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->prenom }}" readonly id="fname" >
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <label for="fname">sexe:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->sexe }}" readonly id="fname" >
                  </div>
                  <div class="col-4">
                    <label for="fname">lieu_affection:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->lieu_affection }}" readonly id="fname" >
                  </div>
                  <div class="col-4">
                    <label for="fname">domaine_stage:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->domaine_stage }}" readonly id="fname" >
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <label for="fname">institution_provenance:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->institution_provenance }}" readonly id="fname" >
                  </div>
                  <div class="col-4">
                    <label for="fname">date_debut:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->date_debut }}" readonly id="fname" >
                  </div>
                  <div class="col-4">
                    <label for="fname">date_fin:</label>
                    <input type="text" class="form-control" value="{{ $fiche->stagiaire->date_fin }}" readonly id="fname" >
                  </div>
                </div>
            </div>
            <div class="col-12">
              <legend>A. DU POINT DE VUE SAVOIR:</legend>
              <div class="row">
                <div class="col-3">
                  <label for="fname">connaissance de la structure d'accueil:</label>
                  <input type="text" class="form-control" value="{{ $fiche->cons_str_acc }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label for="fname">Intégration au poste de travail:</label>
                  <input type="text" class="form-control" value="{{ $fiche->int_post_trav }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label for="fname">Aptitude technique dans son travail:</label>
                  <input type="text" class="form-control" value="{{ $fiche->apt_tech_trav }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label class="mb-3" for="fname">Curiosité professionnelle:</label>
                  <input type="text" class="form-control mt-3" value="{{ $fiche->curio_prof }}" readonly id="fname" >
                </div>
              </div>
            </div>
            <div class="col-12">
              <legend>B. DU POINT DE VUE SAVOIR - FAIRE:</legend>
              <div class="row">
                <div class="col-3">
                  <label class="mb-3" for="fname">Adresse et précision:</label>
                  <input type="text" class="form-control mt-3" value="{{ $fiche->adress_presi }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label for="fname">Compréhension et efficacité dans le travail:</label>
                  <input type="text" class="form-control" value="{{ $fiche->compr_eff_trav }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label for="fname">Capacité de résoudre les problèmes:</label>
                  <input type="text" class="form-control" value="{{ $fiche->cap_resou_probl }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label class="mb-3" for="fname">Langage et Terminologie:</label>
                  <input type="text" class="form-control mt-3" value="{{ $fiche->lang_termi }}" readonly id="fname" >
                </div>
                <div class="row mt-3">
                  <label class="mb-3 col-10" for="fname">Démonstration cohérence connaissances théoriques et réalité professionnelle:</label>
                  <input type="text" class="form-control col-2" value="{{ $fiche->demon_cohe_cons }}" readonly id="fname" >
                </div>
              </div>
            </div>
            <div class="col-12">
              <legend>C. DU POINT DE VUE SAVOIR - ETRE:</legend>
              <div class="row">
                <div class="col-3">
                  <label class="" for="fname">Respect du R.O.I de l'Etablissement:</label>
                  <input type="text" class="form-control" value="{{ $fiche->respet_loi_etabliss }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label for="fname">Pontualité et tenue vestimentaire:</label>
                  <input type="text" class="form-control" value="{{ $fiche->ponct_tenue_vestim }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label class="mb-3" for="fname">Régularité et langage:</label>
                  <input type="text" class="form-control mt-3" value="{{ $fiche->regul_langa }}" readonly id="fname" >
                </div>
                <div class="col-3">
                  <label class="" for="fname">Sens de commandement / Initiative personnelle:</label>
                  <input type="text" class="form-control" value="{{ $fiche->initia_perso }}" readonly id="fname" >
                </div>
                <div class="row mt-3">
                  <label class="mb-3 col-10" for="fname">Honnêteté, respect du bien public, protection environnementale, sécurité et gestes barrières:</label>
                  <input type="text" class="form-control col-2" value="{{ $fiche->honnet_resp_publ }}" readonly id="fname" >
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <a class="btn btn-success" href="{{ route('fiches.print', $fiche->id) }}">Voir avant l'Impression</a>
              {{-- <a href="{{ route('fiches.edit', $fiche->id) }}" class="btn btn-primary">Editer</a> --}}
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection