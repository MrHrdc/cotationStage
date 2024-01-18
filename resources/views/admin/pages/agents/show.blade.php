@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Utilisateurs</li>
      <li class="breadcrumb-item active">Détails</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Détails de l'utilisateur</h5>

          <div class="form-group">
            <label for="inputNom">Nom</label>
            <input type="text" class="form-control" id="inputNom" value="{{ $agent->nom }}" readonly>
          </div>

          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" value="{{ $agent->email }}" readonly>
          </div>

          <div class="form-group">
            <label for="inputPostnom">Postnom</label>
            <input type="text" class="form-control" id="inputPostnom" value="{{ $agent->postnom }}" readonly>
          </div>

          <div class="form-group">
            <label for="inputPrenom">Prénom</label>
            <input type="text" class="form-control" id="inputPrenom" value="{{ $agent->prenom }}" readonly>
          </div>

          <div class="form-group">
            <label for="inputFonction">Fonction</label>
            <input type="text" class="form-control" id="inputFonction" value="{{ $agent->fonction->name }}" readonly>
          </div>

          <div class="text-center">
            <a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection