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
                errorMessage.textContent = 'La valeur saisie doit être inférieure ou egal ' + max + '.';
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