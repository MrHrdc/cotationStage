<!DOCTYPE html>
<html>
<head>
  <title>Fiche du Stagiaire</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
    .container {
        border: 1px solid black;
        /* background-color: red; */
        width: 695px;
        height: 1242px;
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
  
      /* Ajoutez ici les styles de table que vous souhaitez conserver lors de l'impression */
      table {
        /* Vos styles de table ici */
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h5 class="text-center">FICHE DE NOTATION POUR ETUDIANTS</h5>
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
                <td class="col-9" colspan="2">Total A</td>
                <td class="col-1">0</td>
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
                    <td class="col-9" colspan="2">Total B</td>
                    <td class="col-1"></td>
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
                    <td class="col-1">0</td>
                    <td class="col-1">8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row align-center">
        <button class="print-button" onclick="window.print()">Imprimer</button>
      </div>
  </div>

</body>

</html>