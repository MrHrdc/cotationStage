@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Fonctions</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Fonctions</li>
      <li class="breadcrumb-item active">Détails</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Détails de la fonction</h5>

      <div class="form-group">
        <label for="inputName">Nom</label>
        <input type="text" class="form-control" id="inputName" value="{{ $fonction->name }}" readonly>
      </div>

      <div class="text-center">
        <a href="{{ route('fonctions.edit', $fonction->id) }}" class="btn btn-primary">Modifier</a>
        <form action="{{ route('fonctions.destroy', $fonction->id) }}" method="POST" style="display: inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette fonction ?')">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection