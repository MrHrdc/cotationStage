@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Fiche</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Fiche</li>
      <li class="breadcrumb-item active">Liste</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Liste des Fiches</h5>

          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nom du Stagiaire</th>
                <th>Post-nom</th>
                <th>Date de la fin</th>
                <th>Cote</th>
                <th class="text-right col-lg-2">
                  Actions
                </th>
              </tr>
            </thead>
            <tbody>
              @if(count($fiches) > 0)
                @foreach($fiches as $fiche)
                <tr>
                  <td>{{ $fiche->stagiaire->nom }} {{$fiche->id}}</td>
                  <td>{{ $fiche->stagiaire->postnom }}</td>
                  <td>{{ $fiche->stagiaire->date_fin }}</td>
                  <td>{{ $fiche->coteTotale  }}</td>
                  <td class="text-right  col-lg-2">
                    <form action="" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('fiches.show', $fiche->id) }}">
                            <i class="fas fa-folder">
                              Voir
                            </i>
                        </a>
                        {{-- @access('delete', 'User') --}}
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-danger btn-sm" href="{{ route('fiches.destroy', $fiche->id) }}"
                                onclick="supprimer(event)" item="Voulez-vous supprimer la fiche {{ $fiche->id }}"
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
                <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalDeleteLabel">Confirmation de suppression</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p id="textDelete"></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <form id="deleteForm" method="POST" action="{{ route('fiches.destroy', $fiche->id) }}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              @else
                <tr>
                  <td colspan="5" class="text-center">Aucune fiche enregistrée.</td>
                </tr>
              @endif
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>


@endsection

