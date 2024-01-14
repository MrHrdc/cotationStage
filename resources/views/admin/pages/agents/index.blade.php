@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('index')}}">Accueil</a></li>
      <li class="breadcrumb-item">Utilisateurs</li>
      <li class="breadcrumb-item active">Liste</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Liste des utilisateurs</h5>

      <table class="table">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Postnom</th>
            <th>Prénom</th>
            <th>Fonction</th>
            <th class="text-right col-lg-2">
              Actions
          </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($agents as $agent)
          <tr>
            <td>{{ $agent->nom }}</td>
            <td>{{ $agent->email }}</td>
            <td>{{ $agent->postnom }}</td>
            <td>{{ $agent->prenom }}</td>
            @if ($agent->fonction && $agent->fonction->name !== "")
            <td>{{ $agent->fonction->name }}</td>
            @else
            <td>L'agent n'a pas de fonction</td>
            @endif 
            <td class="text-right  col-lg-2">
              <form action="" method="POST">
                  <a class="btn btn-primary btn-sm" href="{{ route('agents.show', $agent->id) }}">
                      <i class="fas fa-folder">
                        Voir
                      </i>
                  </a>
                  {{-- @access('delete', 'User') --}}
                      @csrf
                      @method('DELETE')
                      <a class="btn btn-danger btn-sm" href="{{ route('agents.destroy', $agent->id) }}"
                          onclick="supprimer(event)" item="Voulez-vous supprimer le agent {{ $agent->nom }}"
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
      @include('admin.layouts.delete')
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script>
  function supprimer(event) {
      event.preventDefault();
      a = event.target.closest('a');

      let deleteForm = document.getElementById('deleteForm');
      console.log(deleteForm)
      deleteForm.setAttribute('action', a.getAttribute('href'));

      let textDelete = document.getElementById('textDelete');
      textDelete.innerHTML = a.getAttribute('item') + " ?";

      let titleDelete = document.getElementById('titleDelete');
      titleDelete.innerHTML = "Suppression";

  }
</script>
@endsection