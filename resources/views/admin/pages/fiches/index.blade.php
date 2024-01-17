@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>fiche</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">fiche</li>
      <li class="breadcrumb-item active">Liste</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Liste des fiche</h5>

          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          <table class="table table-striped">
            <thead>
              
            <tr>
                <ul>
                    A. Du point de vue du savoir
                </ul>
                <th>Connaissance et structure d'Accueil</th>
                <th>integration au poste de travail</th>
                <th>aptitude et technique dans son travail</th>
                <th>curiosite personnelle</th>
                <th class="text-right col-lg-2">
                  Actions
              </th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <ul> 
                  B. Du point de vu saoir formulaire
</ul>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

              </tr>

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection