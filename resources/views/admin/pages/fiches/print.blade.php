<!DOCTYPE html>
<html>
<head>
  <title>Fiche du Stagiaire</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
    .container {
      font-family: sans-serif;
        border: 1px solid black;
        /* background-color: red; */
        width: 895px;
        height: 1842px;
    }
    .elite {
    font-weight: bold;
    border-bottom: 1px solid;
  }
  .tres-bon, .bon, .assez-bon, .mauvais, .tres-mauvais, .mediocre {
    border-bottom: 1px solid;
  }
    .zonevisa {
      width: 685px;
      height: 100px;
      border-top: 1px solid black;
      /* background-color: red; */
    }

    .zoneAprreciation {
      width: 685px;
      height: 300px;
      border-top : 1px solid black;
      /* background-color: aqua; */
    }
    .zoneAppreciationFlex {
      width: 100%;
      height: 200px;
      /* background-color: red !important; */
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .zoneAppreciationFlex ul {
      list-style: none;
    }
    h6 {
      text-align: center;
    }
    tr .encadreurTD {
      /* background-color: red; */
      border: 1px solid black;
      border-collapse: collapse;
      height: 100px;
      text-align: top;
    }
    .text-left{
      text-align: left;
      font-weight: bold;
    }
    .large_cellule {
        width: 10px;
        color: aqua;
    }
    button {
      user-select: none;
	-moz-user-select: none;
	background: aquamarine none repeat scroll 0 0;
  margin: auto;
	border: medium none;
	border-radius: 30px;
	color: var(--tg-white);
	cursor: pointer;
	display: inline-flex;
	align-items: center;
	font-size: 14px;
	font-weight: 700;
	letter-spacing: 0.02em;
	line-height: 1;
	margin-bottom: 0;
	padding: 18px 18px 18px 22px;
	text-align: center;
	text-transform: uppercase;
	touch-action: manipulation;
	transition: all 0.3s ease 0s;
	vertical-align: middle;
	white-space: nowrap;
	border: 0;
	position: relative;
	z-index: 1;
    }

    @media print {
      .print-button {
        display: none;
      }
      
    tr .encadreurTD {
      /* background-color: red; */
      border: 1px solid black;
      border-collapse: collapse;
      height: 100px;
      text-align: top;
    }
  
      /* Ajoutez ici les styles de table que vous souhaitez conserver lors de l'impression */
      table {
        /* Vos styles de table ici */
      }
    }
  </style>
</head>
<body>
  <div class="container">
  <h8 class="text-center">OFFICE DES ROUTES</br> DEPARTEMENT D'ADMINISTRATION GENERALE </br> DIRECTION DE FORMATION</h8>
    <h3 class="text-center">FICHE DE NOTATION POUR ETUDIANTS</h3>
    <div class="row">
      <div class="col-12">
       <div class="row">
        <div class="col-6">
            <span>NOM & POST-NOM  :</span>
            <span>{{ $fiche->stagiaire->nom }} {{ $fiche->stagiaire->postnom }}</span>
        </div>
        <div class="col-6">
            <span>INSTITUTION DE PROVENANCE:</span>
            <span>{{ $fiche->stagiaire->institution_provenance }}</span>
        </div>
       </div> 
       <div class="row">
        <div class="col-6">
            <span>LIEU D'AFFECTATION:</span>
            <span>{{ $fiche->stagiaire->lieu_affection }}</span>
        </div>
        <div class="col-6">
            <span>PERIODE PREVISIONNELLE :</span>
            <span>{{ $fiche->stagiaire->date_debut }} au {{ $fiche->stagiaire->date_fin }}</span>
        </div>
       </div>
       <div class="row">
        <div class="col-6">
            <span>DOMAINE DU STAGE:</span>
            <span>{{ $fiche->stagiaire->domaine_stage }}</span>
        </div>
       </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="col-1">N°</th>
                <th class="col-9" colspan="3">A. DU POINT DE VUE SAVOIR:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-1">1</td>
                <td class="col-9">Connaissance de la structure d'accueil</td>
                <td class="col-1">{{ $fiche->cons_str_acc }}</td>
                <td class="col-1">1</td>
              </tr>
              <tr>
                <td class="col-1">2</td>
                <td class="col-9">Intégration au poste de travail</td>
                <td class="col-1">{{ $fiche->int_post_trav }}</td>
                <td class="col-1">1</td>
              </tr>
              <tr>
                <td class="col-1">3</td>
                <td class="col-9">Aptitude technique dans son travail</td>
                <td class="col-1">{{ $fiche->apt_tech_trav }}</td>
                <td class="col-1">1</td>
              </tr>
              <tr>
                <td class="col-1">4</td>
                <td class="col-9">Curiosité professionnelle</td>
                <td class="col-1">{{ $fiche->curio_prof }}</td>
                <td class="col-1">1</td>
              </tr>
              <tr>
                <td class="col-9 text-left" colspan="2">Total A</td>
                <td class="col-1">
                  <?php
                    // Obtenir les valeurs des champs de la catégorie A
                    $cons_str_acc = $fiche->cons_str_acc;
                    $int_post_trav = $fiche->int_post_trav;
                    $apt_tech_trav = $fiche->apt_tech_trav;
                    $curio_prof = $fiche->curio_prof;

                    // Calculer le total de la catégorie A
                    $total_A = $cons_str_acc + $int_post_trav + $apt_tech_trav + $curio_prof;
                    ?>
                <?php echo $total_A; ?></td>
                <td class="col-1">4</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="col-1">N°</th>
                  <th class="col-9" colspan="3">B. DU POINT DE VUE SAVOIR - FAIRE</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="col-1">1</td>
                  <td class="col-9">Adresse et précision</td>
                  <td class="col-1">{{ $fiche->adress_presi }}</td>
                  <td class="col-1">1.6</td>
                </tr>
                <tr>
                  <td class="col-1">2</td>
                  <td class="col-9">Compréhension et efficacité dans le travail</td>
                  <td class="col-1">{{ $fiche->compr_eff_trav }}</td>
                  <td class="col-1">1.6</td>
                </tr>
                <tr>
                  <td class="col-1">3</td>
                  <td class="col-9">Capacité de résoudre les problèmes</td>
                  <td class="col-1">{{ $fiche->cap_resou_probl }}</td>
                  <td class="col-1">1.6</td>
                </tr>
                <tr>
                  <td class="col-1">4</td>
                  <td class="col-9">Langage et Terminologie</td>
                  <td class="col-1">{{ $fiche->lang_termi }}</td>
                  <td class="col-1">1.6</td>
                </tr>
                <tr>
                    <td class="col-1">5</td>
                    <td class="col-9">Démonstration cohérence connaissances théoriques et réalité professionnelle</td>
                    <td class="col-1">{{ $fiche->demon_cohe_cons }}</td>
                    <td class="col-1">1.6</td>
                </tr>
                <tr>
                    <td class="col-9 text-left" colspan="2">Total B</td>
                    <td class="col-1">
                      <?php
                        // Obtenir les valeurs des champs de la catégorie B
                        $adress_presi = $fiche->adress_presi;
                        $compr_eff_trav = $fiche->compr_eff_trav;
                        $cap_resou_probl = $fiche->cap_resou_probl;
                        $lang_termi = $fiche->lang_termi;
                        $demon_cohe_cons = $fiche->demon_cohe_cons;

                        // Calculer le total de la catégorie B
                        $total_B = $adress_presi + $compr_eff_trav + $cap_resou_probl + $lang_termi + $demon_cohe_cons;
                      ?>
                    <?php echo $total_B; ?></td>
                    <td class="col-1">8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="col-1">N°</th>
                  <th class="col-9" colspan="3">C. DU POINT DE VUE SAVOIR - ETRE</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="col-1">1</td>
                  <td class="col-9">Respect de la loi établissement</td>
                  <td class="col-1">{{ $fiche->respet_loi_etabliss }}</td>
                  <td class="col-1">1.6</td>
                </tr>
                <tr>
                  <td class="col-1">2</td>
                  <td class="col-9">Ponctualité et tenue vestimentaire</td>
                  <td class="col-1">{{ $fiche->ponct_tenue_vestim }}</td>
                  <td class="col-1">1.6</td>
                </tr>
                <tr>
                  <td class="col-1">3</td>
                  <td class="col-9">Régularité et langage approprié</td>
                  <td class="col-1">{{ $fiche->regul_langa }}</td>
                  <td class="col-1">1.6</td>
                </tr>
                <tr>
                  <td class="col-1">4</td>
                  <td class="col-9">Honnêteté et responsabilité public</td>
                  <td class="col-1">{{ $fiche->honnet_resp_publ }}</td>
                  <td class="col-1">1.6</td>
                </tr>
                <tr>
                    <td class="col-1">5</td>
                    <td class="col-9">Initiative personnelle</td>
                    <td class="col-1">{{ $fiche->initia_perso }}</td>
                    <td class="col-1">1.6</td>
                </tr>
                <tr>

                    <td class="col-9" colspan="2">Total C</td>
                    <td class="col-1">
                      <?php
                      // Obtenir les valeurs des champs
                      $respet_loi_etabliss = $fiche->respet_loi_etabliss;
                      $ponct_tenue_vestim = $fiche->ponct_tenue_vestim;
                      $regul_langa = $fiche->regul_langa;
                      $honnet_resp_publ = $fiche->honnet_resp_publ;
                      $initia_perso = $fiche->initia_perso;
                      
                      // Calculer le total de la catégorie A
                      $total_C = $respet_loi_etabliss + $ponct_tenue_vestim + $regul_langa + $honnet_resp_publ + $initia_perso;
                      ?>
                      <?php echo $total_A; ?></td>

                    <td class="col-1">8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="col-4 encadreurTD">Nom et Post-nom de l'encadreur  <br>
                    {{$fiche->user->nom}} {{$fiche->user->postnom}} {{$fiche->user->prenom}}
                  </th>
                  <th class="col-3 encadreurTD" >Fonction <br>
                    {{$fiche->user->fonction->name}}
                  </th>
                  <th class="col-3 encadreurTD">Date <br>
                    {{$fiche->user->created_at}}
                  </th>
                  <th class="col-2 encadreurTD">Signature <br> 

                  </th>
                  <th class="col-2 encadreurTD">Total Général <br>
                    @php
                        $totalGeneral = $total_A + $total_B + $total_C;
                        echo $totalGeneral;
                    @endphp
                  </th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
    </div>
    <div class="row">
        <div class=" col-12 zonevisa">
          <h6>VISA DU DIRECTEUR CONCERNE</h6>
        </div>
    </div>
    <div class="row">
      <div class=" col-12 zonevisa">
        <h6>VISA DU DIRECTEUR DE LA FORMATION</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-12 zoneAppreciation">
        <h6>ÉCHELLE D'ÉVALUATION</h6>
        <div class="zoneAppreciationFlex">
          <ul>
            <li id="elite">ELITE : 18 à 20</li>
            <li id="tres-bon">TRÈS BON : 15 à 17</li>
            <li id="bon">BON : 12 à 14</li>
            <li id="assez-bon">ASSEZ BON : 9 à 11</li>
          </ul> 
          <ul>
            <li id="mauvais">MAUVAIS : 6 à 8</li>
            <li id="tres-mauvais">TRÈS MAUVAIS : 3 à 5</li>
            <li id="mediocre">MÉDIOCRE : 0 à 2</li>
          </ul>
        </div>
      </div>
    </div>
    
      <div class="row align-center">
        <button class="print-button" onclick="window.print()">Imprimer</button>
      </div>
  </div>

</body>
<script>
  var totalGeneral = <?php echo $totalGeneral; ?>;
  var categories = ['elite', 'tres-bon', 'bon', 'assez-bon', 'mauvais', 'tres-mauvais', 'mediocre'];

  for (var i = 0; i < categories.length; i++) {
    var category = categories[i];
    var liElement = document.getElementById(category);

    if (category === 'elite' && totalGeneral >= 18 && totalGeneral <= 20) {
      liElement.style.fontWeight = 'bold';
      liElement.style.borderBottom = '1px solid';
    } else if (category === 'tres-bon' && totalGeneral >= 15 && totalGeneral <= 17) {
      liElement.style.borderBottom = '1px solid';
    } else if (category === 'bon' && totalGeneral >= 12 && totalGeneral <= 14) {
      liElement.style.border = '1px solid';
    } else if (category === 'assez-bon' && totalGeneral >= 9 && totalGeneral <= 11) {
      liElement.style.borderBottom = '1px solid';
    } else if (category === 'mauvais' && totalGeneral >= 6 && totalGeneral <= 8) {
      liElement.style.border = '1px solid';
    } else if (category === 'tres-mauvais' && totalGeneral >= 3 && totalGeneral <= 5) {
      liElement.style.borderBottom = '1px solid';
    } else if (category === 'mediocre' && totalGeneral >= 0 && totalGeneral <= 2) {
      liElement.style.borderBottom = '1px solid';
    } else {
      liElement.style.borderBottom = 'none';
    }
  }
</script>
</html>