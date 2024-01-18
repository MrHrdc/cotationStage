@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Utilisateurs</li>
      <li class="breadcrumb-item active">Édition</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Édition de l'utilisateur</h5>

          <!-- User Edit Form -->
          <form method="POST" action="{{ route('agents.update', $agent->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col">
                <label for="inputNom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="inputNom" name="nom" value="{{ $agent->nom }}" required>
              </div>
              <div class="col">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $agent->email }}" required>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="inputPostnom" class="form-label">Postnom</label>
                <input type="text" class="form-control" id="inputPostnom" name="postnom" value="{{ $agent->postnom }}">
              </div>
              <div class="col">
                <label for="inputPrenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="inputPrenom" name="prenom" value="{{ $agent->prenom }}" required>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="inputPassword" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword" name="password">
              </div>
              <div class="col">
                <label for="inputFonction" class="form-label">Fonction</label>
                <select class="form-control" id="inputFonction" name="fonction_id" required>
                  @foreach ($fonctions as $fonction)
                    <option value="{{ $fonction->id }}" @if ($agent->fonction_id == $fonction->id) selected @endif>{{ $fonction->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="text-right mt-2">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
              <a href="{{ route('agents.show', $agent->id) }}" class="btn btn-secondary">Annuler</a>
            </div>
          </form><!-- End User Edit Form -->

        </div>
      </div>
    </div>
  </div>
</section>

@endsection