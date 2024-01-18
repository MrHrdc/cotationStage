@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Fonctions</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Fonctions</li>
      <li class="breadcrumb-item active">Édition</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Édition d'une fonction</h5>

          <!-- Fonction Edit Form -->
          <form method="POST" action="{{ route('fonctions.update', $fonction->id) }}">
            @csrf
            @method('PUT')
            <div class="col-12">
              <label for="inputName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="inputName" name="name" value="{{ $fonction->name }}" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Mettre à jour</button>
              <a href="{{ route('fonctions.index') }}" class="btn btn-secondary">Annuler</a>
            </div>
          </form><!-- End Fonction Edit Form -->

        </div>
      </div>
    </div>
  </div>
</section>

@endsection