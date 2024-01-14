@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Fonctions</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Fonctions</li>
      <li class="breadcrumb-item active">Liste</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Liste des fonctions</h5>

      <table class="table">
        <thead>
          <tr>
            <th>Nom</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($fonctions as $fonction)
          <tr>
            <td>{{ $fonction->name }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

@endsection