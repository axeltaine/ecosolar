<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Devis</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="css/test.css" rel="stylesheet">
  <link href="css/listtest.css" rel="stylesheet">
  <link rel="stylesheet" href="css/maison.css" />
  <link href="css/angle_toit.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="carte.css" rel="stylesheet">
</head>

<body>
  <header>



  </header>
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
      <img class="logo rounded mx-auto d-block" src="img/icone-pastille-ecosolar-rvb.png" />
    </div>
  </div>

  <!-- MultiStep Form -->
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
      <form id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Consommation</li>
          <li>Appareils et utilisateurs</li>
          <li>Bâtiment</li>
          <li>Toiture</li>
          <li>Information personnel</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="fs-title">Informations sur la consommation</h2>
            <hr class="hr2">
          </div>
          <div class="display_conso">
            <div class="form-group">
              <label for="consommation" class=data-toggle="tooltip" data-placement="top"
                title="Consommation annuelle">Consommation*:</label>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">
                  <input class="form-control" placeholder="Montant de votre facture annuelle" type="text"
                    name="facture">
                </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">
                  Je n'ai pas ma facture d'électricité.
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="fournisseur">Fournisseur</label> : </br>
              <div class='display_button'>
                <button type="button" class="button_edf"><img src="img/EDF_energy.png" alt="" style="max-height: 4em;"></button>
                <button type="button" class="button_autre"><img src="img/autre_logo.png" alt="" style="height:2em;"><br>Autre</button>
              </div>
            </div>
          </div>
          </br>
          <div class="display_chauff">
            <div class="form-group chauff_colonne">
              <img class="img_chauff1" src="icons/chauffage.png" style="width:24%;">
              <label for="exampleFormControlSelect2">Chauffage</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>Chauffage électrique</option>
                <option>Climatisation (PAC Air/Air)</option>
                <option>Pompe à chaleur Air/Eau</option>
                <option>Chauffage gaz, fioul ou bois</option>
              </select>
            </div>
            <div class="form-group chauff_colonne">
              <img class="img_chauff1" src="icons/logo-eau.png" style="width:30%;">
              <label for="exampleFormControlSelect1">Chauffage-eau</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Résistance électrique</option>
                <option>Pompe à chaleur</option>
                <option>Chaudière bois</option>
                <option>Chaudière gaz</option>
                <option>Chaudrère fuel</option>
              </select>
            </div>
          </div>



          <input type="button" name="next" class="next action-button" value="suivant" />
        </fieldset>

        <fieldset>
          <?php include ('listtest.html'); ?>
          <h3 class="fs-subtitle">Cochez ce qui vous correspond</h3>
          <!-- ajouter une liste d'appareils électriques à cocher le nombre possedé -->
          <div class="form-group">
            <label for="Nombre_personnes_foyer">Nombre personnes foyer</label> :
            <div class="input-group">
              <input class="numeric float optional form-control" min="0" placeholder="0" type="number" step="any"
                value="10" name="study[roof_length]" id="nombre_personnes_foyer">
              <div class="input-group-append">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>

          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value="suivant" />

        </fieldset>

        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="fs-title">Informations sur la toiture</h2>
            <hr class="hr2">
          </div>
          <div class="container toiture">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="orientation" data-toggle="tooltip" data-placement="top"
                    title="Obligatoire">Orientation*</label> : <br>
                  <!-- ligne contenant l'orientation avec les triangles animer en jquery -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex bloc_orientation">
                    <div class="maison">
                      <img id="ouest" src="img/ouest.png" />
                      <img id="Sud_ouest" src="img/Sud_ouest.png" />
                      <img id="Sud" src="img/Sud.png" />
                      <img id="est" src="img/est.png" />
                      <img id="Sud_est" src="img/Sud-est.png" />
                    </div>
                    <div class="button">
                      <button id="button_ouest" type="button" class="btn btn-primary">Ouest</button>
                      <button id="button_Sud_ouest" type="button" class="btn btn-primary">Sud_ouest</button>
                      <button id="button_Sud" type="button" class="btn btn-primary">Sud</button>
                      <button id="button_est" type="button" class="btn btn-primary">Est</button>
                      <button id="button_Sud_est" type="button" class="btn btn-primary">Sud_est</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- fin du bloc orientation -->
              <div class="col">
                <div id="angle_form">

                  <div>
                    <label for="inclinaison" data-toggle="tooltip" data-placement="top"
                      title="max 50°">Inclinaison*</label> : <br>
                  </div>

                  <canvas class="moncanvas" id="canvas" width="500" height="500"></canvas>


                  <label>Angle d'inclinaison approximatif de votre toiture en °</label><br />
                  <div class="form-check form-check-inline">
                    <!--!!!!!!!!!!!!!!!!!!! le onclick est nécessaire pour récupérer la valeur de l'input -->
                    <div class="d-flex flex-column">
                      <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);"
                        name="inlineRadioOptions" id="angle1" value="5">
                      <label class="form-check-label" for="inlineRadio1">05</label>
                    </div>
                  </div>
                  <div class="form-check form-check-inline">
                    <div class="d-flex flex-column">
                      <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);"
                        name="inlineRadioOptions" id="angle2" value="20">
                      <label class="form-check-label" for="inlineRadio2">20</label>
                    </div>
                  </div>
                  <div class="form-check form-check-inline">
                    <div class="d-flex flex-column">
                      <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);"
                        name="inlineRadioOptions" id="angle3" value="35">
                      <label class="form-check-label" for="inlineRadio3">35</label>
                    </div>
                  </div>
                  <div class="form-check form-check-inline">
                    <div class="d-flex flex-column">
                      <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);"
                        name="inlineRadioOptions" id="angle4" value="45">
                      <label class="form-check-label" for="inlineRadio4">45</label>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="form-group surface">
            <label for="surface" data-toggle="tooltip" data-placement="top" title="Obligatoire">Surface*</label> :
          </div>
          <div class="button_toiture">
            <button type="button"><img class="toiture_svg" src="img/house-roof.svg"/><p>< 20m</p></button>
            <button type="button"><img class="toiture_svg2" src="img/house-roof.svg"/><p>20 - 40m</p></button>
            <button type="button"><img class="toiture_svg3" src="img/house-roof.svg"/><p>> 40m</p></button>
          </div>
          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value=" suivant" />
        </fieldset>

        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="fs-title">Informations sur le bâtiment</h2>
            <hr class="hr2">
          </div>
          <div class="container-fluid d-flex justify-content-center">
            <div class="form-group w-25 p-3">
              <label for="cotation">cotation:</label>
              <div class="row d-flex justify-content-center">
                <img src="img/cotation.png" class="img-thumbnail" style="height:12em; width:12em;">
              </div>
            </div>
            <div class="d-flex flex-column w-25 p-3">
              <div class="form-group string optional study_roof_length"><label class="string optional small"
                  for="study_roof_length">Longeur</label>

                <div class="input-group h-25">
                  <input class="numeric float optional form-control" min="0" placeholder="0" type="number" step="any"
                    value="10" name="study[roof_length]" id="study_roof_length">
                  <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">m</label>
                  </div>
                </div>
              </div>
              <div class="form-group string optional study_roof_width "><label class="string optional small"
                  for="study_roof_width">Largeur</label>

                <div class="input-group h-25">
                  <input class="numeric float optional form-control" min="0" placeholder="0" type="number" step="any"
                    value="10" name="study[roof_width]" id="study_roof_width">
                  <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">m</label>
                  </div>
                </div>
              </div>
              <div class="form-group string optional study_roof_height "><label class="string optional small"
                  for="study_roof_height">Hauteur</label>

                <div class="input-group h-25">
                  <input class="numeric float optional form-control" min="0" placeholder="0" type="number" step="any"
                    value="3" name="study[roof_height]" id="study_roof_height">
                  <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">m</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group d-flex justify-content-space-between h-25">
              <label for="age">age</label> : <input type="text" name="age" id="age" />
            </div>
          </div>
          <div class="form-group">
            <label for="couverture">carte</label> :
              <?php include ('carte.html'); ?>
          </div>

          <div class="form-group">
            <label for="couverture">Couverture</label> :
            <?php include ('checkbox.php'); ?>
          </div>

          <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control-file" name="photo" id="photo" />
          </div>


          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value=" suivant" />
        </fieldset>


        <fieldset>
          <div class="display_hr">
            <hr class="hr1">
            <h2 class="modal-title">Information personnel</h2>
            <hr class="hr2">
          </div>
          <div class="form-row">
            <div class="col-7 mb-3 d-flex align-items-center">
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" value="" name="gender" id="Monsieur">
                <label class="custom-control-label" for="Monsieur">Monsieur</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" value="" name="gender" id="Madame">
                <label class="custom-control-label" for="Madame">Madame</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col mb-3">
              <input class="form-control" placeholder="nom" type="text" name="nom">
            </div>

            <div class="col mb-3">
              <input class="form-control" placeholder="prenom" type="text" name="prenom">
            </div>
          </div>


          <div class="form-row">
            <div class="col mb-3">
              <input class="form-control" placeholder="email" type="email" name="eamil">
            </div>

            <div class="col mb-3">
              <input class="form-control" placeholder="Telephone" type="text" name="Telephone">
            </div>
          </div>

          <div class="form-row">
            <div class="col mb-3">
              <input class="form-control" placeholder="Adresse" type="text" name="Adresse">
            </div>

            <div class="col mb-3">
              <input class="form-control" placeholder="code postal" type="text" name="code postal">
            </div>

            <div class="col mb-3">
              <input class="form-control" placeholder="Ville" type="text" name="ville">
            </div>

          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="submit" name="submit" class="submit action-button" value="Submit" />
        </fieldset>
      </form>
    </div>
  </div>
  <!-- /.MultiStep Form -->



  </main>


  <footer>



  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="js/test.js"></script>
  <script src="js/maison.js"></script>
  <script src="js/angle.js"></script>
  <script src="js/checkbox.js"></script>
  <script src="carte.js"></script>

</body>

</html>
