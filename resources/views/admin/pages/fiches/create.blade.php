@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Fiches</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
      <li class="breadcrumb-item">Fiches</li>
      <li class="breadcrumb-item active">Création</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Création d'une fiche</h5>

          <!-- Fiche Creation Form -->
          <form method="POST" action="{{ route('fiches.store') }}" id="fiche-form">
            @csrf
            <div class="step" id="step0">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('assets/img/man.png')}}" class="center" alt="" width="300px" height="300px">
                        </div>
                        <div class="col-6">
                            <fieldset>
                                <legend>Les Informations du Stagiaire</legend>
                                <div class="row mt-2">
                                    <div class="col-5">
                                        <label for="stagiaire_id" class="form-label">Rechercher un Stagiaire</label>
                                    </div>
                                    <div class="col-7">
                                        <select class="form-control select2" id="stagiaire_id" required data-live-search="true">
                                            <option value="">Rechercher un stagiaire</option>
                                            @foreach ($stagiaires as $stagiaire)
                                            <option value="{{ $stagiaire->id }}" data-nom="{{ $stagiaire->nom }}"  data-postnom="{{ $stagiaire->postnom }}" data-prenom="{{ $stagiaire->prenom }}" data-institution="{{ $stagiaire->institution_provenance }}" data-lieuAffectation="{{$stagiaire->lieuAffectation}}">{{ $stagiaire->nom }} {{ $stagiaire->postnom }} {{ $stagiaire->prenom }} {{ $stagiaire->institution_provenance }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="nomAndPostnom" id="nomAndPostnom" class="form-label nom">Nom & Postnom : </label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="InstitionDeProvenace" id="InstitionDeProvenace" class="form-label">Instition de Provenace : </label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="domaineDuStage" id="domaineDuStage" class="form-label">Domaine du Stage : </label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="periodePrevisionnelle" id="periodePrevisionnelle" class="form-label">Periode Prévisionnelle : </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
              <!-- Ajoutez les autres champs de la page 1 ici -->

              <div class="text-center mt-2">
                <button type="button" class="btn btn-primary" onclick="validateStep(0)">Suivant</button>
              </div>
            </div>
            <div class="step" id="step1" style="display: none;">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('assets/img/savoir.png')}}" class="center" alt="" width="300px" height="300px">
                        </div>
                        <div class="col-6">
                            <fieldset>
                                <legend>A. Du point de vue du savoir</legend>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="cons_str_acc" class="form-label">Consolidation et structuration de l'acquis</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepOne" id="cons_str_acc" name="cons_str_acc" step="0.01" max="1" required>    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="int_post_trav" class="form-label">Intégration et prise de poste de travail</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepOne" id="int_post_trav" name="int_post_trav" step="0.01" max="1" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="apt_tech_trav" class="form-label">Aptitude technique au travail</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepOne" id="apt_tech_trav" name="apt_tech_trav" step="0.01" max="1" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="curio_prof" class="form-label">Curiosité professionnelle</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepOne" id="curio_prof" name="curio_prof" step="0.01" max="1" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="total" class="form-label fs-4 fw-bold">Total (A)</label>
                                    </div>
                                    <div class="col-3">
                                        <label for="totalValue" class="form-label fs-4 fw-bold" id="labelTotalStepOne">0</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
              <!-- Ajoutez les autres champs de la page 1 ici -->

              <div class="text-center mt-2">
                <button type="button" class="btn btn-primary" onclick="validateStep(1)">Suivant</button>
                <button type="button" class="btn btn-primary" onclick="previousStep()">Précédent</button>
              </div>
            </div>

            <div class="step" id="step2" style="display: none;">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('assets/img/faire.png')}}" alt="" width="300px" height="300px">
                        </div>
                        <div class="col-6">
                            <fieldset>
                                <legend>A. Du point de vue du savoir - faire</legend>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="adress_presi" class="form-label">Adresse et présidence</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepTwo" id="adress_presi" name="adress_presi" step="0.01" max="1.6" required>                     
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="compr_eff_trav" class="form-label">Compréhension et efficacité au travail</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepTwo" id="compr_eff_trav" name="compr_eff_trav" step="0.01" max="1.6" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="cap_resou_probl" class="form-label">Capacité de résolution de problèmes</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepTwo" id="cap_resou_probl" name="cap_resou_probl" step="0.01" max="1.6" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="lang_termi" class="form-label">Langue terminologique</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control stepTwo" id="lang_termi" name="lang_termi" step="0.01" max="1.6" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="demon_cohe_cons" class="form-label">Démonstration de cohérence et de consistance</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepTwo" id="demon_cohe_cons" name="demon_cohe_cons" step="0.01" max="1.6" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="total" class="form-label fs-4 fw-bold">Total (B)</label>
                                    </div>
                                    <div class="col-3">
                                        <label for="totalValue" class="form-label fs-4 fw-bold" id="labelTotalStepTwo">0</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
              <!-- Ajoutez les autres champs de la page 2 ici -->

              <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="validateStep(2)">Suivant</button>
                <button type="button" class="btn btn-primary" onclick="previousStep()">Précédent</button>
              </div>
            </div>

            <div class="step" id="step3" style="display: none;">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('assets/img/etre.png')}}" alt="" width="300px" height="300px">
                        </div>
                        <div class="col-6">
                            <fieldset>
                                <legend>A. Du point de vue du savoir - être</legend>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="respet_loi_etabliss" class="form-label">Respect de la loi établie</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepThree" id="respet_loi_etabliss" name="respet_loi_etabliss" step="0.01" max="1.6" required>                     
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="ponct_tenue_vestim" class="form-label">Ponctualité et tenue vestimentaire</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepThree" id="ponct_tenue_vestim" name="ponct_tenue_vestim" step="0.01" max="1.6" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="regul_langa" class="form-label">Régularité et langage approprié</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepThree" id="regul_langa" name="regul_langa" step="0.01" max="1.6" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="honnet_resp_publ" class="form-label">Honnêteté et responsabilité publique</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control stepThree" id="honnet_resp_publ" name="honnet_resp_publ" step="0.01" max="1.6" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="initia_perso" class="form-label">Initiative personnelle</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="form-control errorInput stepThree" id="initia_perso" name="initia_perso" step="0.01" max="1.6" required>                    
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-9">
                                        <label for="total" class="form-label fs-4 fw-bold">Total (C)</label>
                                    </div>
                                    <div class="col-3">
                                        <label for="totalValue" class="form-label fs-4 fw-bold" id="labelTotalStepThree">0</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
              <!-- Ajoutez les autres champs de la page 3 ici -->

              <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="previousStep()">Précédent</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </form><!-- End Fiche Creation Form -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection

    @section('scripts')
    {{-- la liste des stagiaires  --}}
    <script>
        $(document).ready(function() {
            $('.select2').select2();

            $('#stagiaire_id').on('change', function() {
                var selectedStagiaire = $(this).find(':selected');
                var nom = selectedStagiaire.text().split(' ')[0];
                var postnom = selectedStagiaire.text().split(' ')[1];
                var prenom = selectedStagiaire.text().split(' ')[2];
                var institution = selectedStagiaire.text().split(' ')[3];
                var lieuAffectation = selectedStagiaire.text().split(' ')[4];

                $('#nomAndPostnom').text('Nom & Postnom: ' + nom + ' ' + postnom);
                $('#lieuAffectation').text('Lieu d\'affection: ' + lieuAffectation);
                $('#institutionProvenance').text('Institution de Provenance: ' + institution);
                // Mettez à jour les autres labels de la même manière
            });
        });
    </script>
    {{-- calcul du total de chaque step --}}
    <script>
        calculateTotal('stepOne', 'labelTotalStepOne');
        calculateTotal('stepTwo', 'labelTotalStepTwo');
        calculateTotal('stepThree', 'labelTotalStepThree');
    
        function calculateTotal(inputClass, targetElementId) {
            var inputs = document.querySelectorAll('.' + inputClass);
            var totalLabel = document.getElementById(targetElementId);
    
            inputs.forEach(function(input) {
                input.addEventListener('input', function() {
                    var total = 0;
                    inputs.forEach(function(input) {
                        var value = parseFloat(input.value);
                        if (!isNaN(value)) {
                            total += value;
                        }
                    });
                    totalLabel.textContent = total.toFixed(2);
                });
            });
    
            // Ajouter le total initial à l'élément cible
            totalLabel.innerText = "0.00";
        }
    </script>
    {{-- validation de données des inputs step  --}}
    <script>
        var inputs = document.querySelectorAll('.errorInput');
        console.log(inputs);
    
        inputs.forEach(function(input) {
            var max = parseFloat(input.getAttribute('max'));
            console.log(max);
            
            var errorMessage = document.createElement('span');
            errorMessage.style.color = 'red';
            errorMessage.style.display = 'none';
            errorMessage.style.fontSize = '10px';
            input.parentNode.appendChild(errorMessage);
    
            input.addEventListener('input', function() {
                var value = parseFloat(input.value);
                if (value > max) {
                    errorMessage.textContent = 'La valeur saisie doit être inférieure à ' + max + '.';
                    errorMessage.style.display = 'block';
                } else {
                    errorMessage.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        var currentStep = 0;
      
        function nextStep() {
          var currentStepDiv = document.getElementById("step" + currentStep);
          currentStepDiv.style.display = "none";
      
          currentStep++;
          var nextStepDiv = document.getElementById("step" + currentStep);
          nextStepDiv.style.display = "block";
        }
      
        function previousStep() {
          var currentStepDiv = document.getElementById("step" + currentStep);
          currentStepDiv.style.display = "none";
      
          currentStep--;
          var previousStepDiv = document.getElementById("step" + currentStep);
          previousStepDiv.style.display = "block";
        }
      
        function validateStep(step) {
          var inputs = document.getElementById("step" + step).getElementsByTagName("input");
          var isValid = true;
          for (var i = 0; i < inputs.length; i++) {
            if (!inputs[i].checkValidity()) {
              isValid = false;
              inputs[i].classList.add("is-invalid");
            } else {
              inputs[i].classList.remove("is-invalid");
            }
          }
      
          if (isValid) {
            nextStep();
          }
        }
      </script>
@endsection