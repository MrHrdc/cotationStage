@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Stagiaires</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Stagiaires</li>
      <li class="breadcrumb-item active">Liste</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Liste des Stagiaires</h5>

          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Postnom</th>
                <th>Prénom</th>
                <th>Lieu d'affection</th>
                <th>Domaine du stage</th>
                <th>Institution de provenance</th>
                <th>Date de début</th>
                <th>Date de fin</th>
              </tr>
            </thead>
            <tbody>
              @foreach($stagiaires as $stagiaire)
              <tr>
                <td>{{ $stagiaire->nom }}</td>
                <td>{{ $stagiaire->sexe }}</td>
                <td>{{ $stagiaire->postnom }}</td>
                <td>{{ $stagiaire->prenom }}</td>
                <td>{{ $stagiaire->lieu_affection }}</td>
                <td>{{ $stagiaire->domaine_stage }}</td>
                <td>{{ $stagiaire->institution_provenance }}</td>
                <td>{{ $stagiaire->date_debut }}</td>
                <td>{{ $stagiaire->date_fin }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection