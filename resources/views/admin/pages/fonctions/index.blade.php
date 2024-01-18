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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($fonctions as $fonction)
          <tr>
            <td>{{ $fonction->name }}</td>
            <td class="text-right  col-lg-2">
              <form action="" method="POST">
                  <a class="btn btn-primary btn-sm" href="{{ route('fonctions.show', $fonction->id) }}">
                      <i class="fas fa-folder">
                        Voir
                      </i>
                  </a>
                  {{-- @access('delete', 'User') --}}
                      @csrf
                      @method('DELETE')
                      <a class="btn btn-danger btn-sm" href="{{ route('fonctions.destroy', $fonction->id) }}"
                          onclick="supprimer(event)" item="Voulez-vous supprimer la fonction {{ $fonction->name }}"
                          data-toggle="modal" data-target="#supprimer">
                          <i class="fas fa-trash">
                            suprimer
                          </i>
                      </a>
                  {{-- @endaccess --}}
              </form>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

@endsection