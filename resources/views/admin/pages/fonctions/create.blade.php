@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Fonctions</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Fonctions</li>
      <li class="breadcrumb-item active">Création</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Création d'une fonction</h5>

          <!-- Fonction Creation Form -->
          <form method="POST" action="{{ route('fonctions.store') }}">
            @csrf
            <div class="col-12">
              <label for="inputName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="inputName" name="name" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Créer</button>
              <button type="reset" class="btn btn-secondary">Réinitialiser</button>
            </div>
          </form><!-- End Fonction Creation Form -->

        </div>
      </div>
    </div>
  </div>
</section>

@endsection