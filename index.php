<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Devis Ecosolar</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="css/test.css" rel="stylesheet">
  <link href="css/listtest.css" rel="stylesheet">
  <link rel="stylesheet" href="css/maison.css" />
  <link href="css/angle_toit.css" rel="stylesheet">
  <link href="carte.css" rel="stylesheet">
</head>

<body>
  <header></header>

  <main class="global">
    <div class="row">
      <div class="col-md-12 col-md-offset-0">
        <img class="logo rounded mx-auto d-block" src="img/icone-pastille-ecosolar-rvb.png" />
      </div>
    </div>

    <!-- MultiStep Form -->
    <div class="row">
      <div class="col-md-12 col-md-offset-0">
        <form id="msform" method="post" action="resultat.php">
          <!-- progressbar -->
          <ul id="progressbar">
            <li class="active">Consommation</li>
            <li>Région</li>
            <li>Toiture</li>
            <li>Bâtiment</li>
            <li>Energie</li>
            <li>Informations personnelles</li>
          </ul>
          <!-- fieldsets -->

          <fieldset>
            <div class="display_hr">
              <hr class="hr1">
              <h2 class="fs-title">Informations sur la consommation</h2>
              <hr class="hr2">
            </div>
            <div class="display_conso">
              <div class="form-group d-flex flex-column conso">
                <label for="consommation" class=data-toggle="tooltip" data-placement="top"
                  title="obligatoire">Consommation*:</label>
                <div class="custom-control custom-radio d-flex justify-content-center">
                  <input class="form-control" placeholder="Consommation en kWh" type="text" name="montant_facture"
                    id="input_conso">
                  </label>
                </div>

                <div class="form-check d-flex flex-column justify-content-center kilow">
                  <label for="abonnement" class=data-toggle="tooltip" data-placement="top" title="obligatoire">Type
                    d'abonnement:</label>
                  <div class="btn-group btn-group-toggle d-flex justify-content-center" data-toggle="buttons">
                    <div class="form-check form-check-inline col-lg-2 col-ms-3">
                      <label class="btn circle_abo1">
                        <input type="radio" id="option1" autocomplete="off" value="3" name="abonnement">
                        <p>
                          3kWh</p>
                      </label>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-lg-2 col-ms-3">
                      <label class="btn circle_abo1">
                        <input type="radio" id="option2" autocomplete="off" value="6" name="abonnement">
                        <p>
                          6kWh</p>
                      </label>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-lg-2 col-ms-3">
                      <label class="btn circle_abo1">
                        <input type="radio" id="option3" autocomplete="off" value="9" name="abonnement">
                        <p>
                          9kWh</p>
                      </label>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col d-flex">
                <div class="surface_toiture">
                  <div class="form-group">
                    <label for="surface" data-toggle="tooltip" data-placement="top" title="Obligatoire">Surface*</label>
                    :
                  </div>
                  <div class="surface_boutton">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary boutton_toiture">
                        <input type="radio" id="option1" autocomplete="off" value="<35m" name="surface"><img
                          class="toiture_svg" src="img/house-roof.svg">
                        <p>
                          < 35m</p> </label> <label class="btn btn-secondary boutton_toiture">
                            <input type="radio" id="option2" cheked autocomplete="off" value="35m<valeur<50m"
                              name="surface"><img class="toiture_svg2" src="img/house-roof.svg" />
                            <p>35 - 50m</p>
                      </label>
                      <label class="btn btn-secondary boutton_toiture">
                        <input type="radio" id="option3" cheked autocomplete="off" value=">50m" name="surface"><img
                          class="toiture_svg3" src="img/house-roof.svg">
                        <p>> 50m</p>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <input type="button" name="next" class="next action-button" value="Suivant" />

          </fieldset>

          <fieldset>
            <div class="display_hr">
              <hr class="hr1">
              <h2 class="fs-title">Informations pour le calcul d'énergie</h2>
              <hr class="hr2">
            </div>
            <div class="container batiment">
              <div class="row">
                <div class="col">
                  <div class="form-group orientation">
                    <div class="form-group">
                      <label for="couverture" ata-toggle="tooltip" data-placement="top"
                        title="Obligatoire">carte*</label>
                      :
                    </div>
                    <?php include ('carte.html'); ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- fin du bloc orientation -->

            <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
            <input type="button" name="next" class="next action-button" value=" Suivant" />
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
                  <div class="form-group orientation">
                    <label for="orientation" data-toggle="tooltip" data-placement="top"
                      title="Obligatoire">Orientation*</label> : <br>
                    <!-- ligne contenant l'orientation avec les triangles animer en jquery -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex flex-column bloc_orientation">
                      <div class="maison d-flex justify-content-center">
                        <img id="ouest" src="img/ouest.png" />
                        <img id="Sud_ouest" src="img/Sud_ouest.png" />
                        <img id="Sud" src="img/Sud.png" />
                        <img id="est" src="img/est.png" />
                        <img id="Sud_est" src="img/Sud-est.png" />
                      </div>
                      <div class="button d-flex justify-content-center">
                        <div class="btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-secondary button_ouest">
                            <input type="radio" cheked autocomplete="off" id="option1" type="button" name="orientation"
                              value="ouest" class="btn btn-primary">Ouest
                          </label>

                          <label class="btn btn-secondary button_Sud_ouest">
                            <input type="radio" cheked autocomplete="off" id="option2" type="button" name="orientation"
                              value="sud_ouest" class="btn btn-primary">Sud_ouest
                          </label>

                          <label class="btn btn-secondary button_Sud">
                            <input type="radio" cheked autocomplete="off" id="option3" type="button" name="orientation"
                              value="sud" class="btn btn-primary">Sud
                          </label>

                          <label class="btn btn-secondary button_est">
                            <input type="radio" cheked autocomplete="off" id="option4" type="button" name="orientation"
                              value="est" class="btn btn-primary">Est
                          </label>

                          <label class="btn btn-secondary button_Sud_est">
                            <input type="radio" cheked autocomplete="off" id="option5" type="button" name="orientation"
                              value="sud_est" class="btn btn-primary">Sud_est
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- fin du bloc orientation -->
                <div class="col">
                  <div id="angle_form" class="d-flex flex-column">

                    <div>
                      <label for="inclinaison" data-toggle="tooltip" data-placement="top"
                        title="obligatoire">Inclinaison*</label> : <br>
                    </div>

                    <canvas class="moncanvas d-flex" id="canvas" width="500" height="500"></canvas>


                    <label>Angle d'inclinaison approximatif de votre toiture en °</label><br />
                    <div class="d-flex justify-content-center">
                      <div class="d-flex flex-column">
                        <input type="range" class="custom-range"
                        min="5" max="50" step="5" name="inclinaison" id="chgtangle"
                        onclick="updateTextInput(this.value)" value="">
                        <span id="AfficheValue">35</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
            <input type="button" name="next" class="next action-button" value=" Suivant" />
          </fieldset>


          <fieldset>
            <div class="display_hr">
              <hr class="hr1">
              <h2 class="fs-title">Informations sur le bâtiment</h2>
              <hr class="hr2">
            </div>
            <div class="container-fluid d-flex justify-content-center col-lg-7">
              <div class="form-group p-3">
                <label for="cotation">cotation:</label>
                <div class="row d-flex justify-content-center cotation">
                  <img src="img/cotation.png" class="img-thumbnail" style="height:12em; width:15em;">
                </div>
              </div>

              <div class="form-group d-flex flex-column string optional study_roof_height hauteur col-lg-5">
                <div class="input-group d-flex flex-column h-25">
                  <label for="formGroupExampleInput">Hauteur:</label>
                  <input type="text" class="form-control" name="hauteur" id="formGroupExampleInput"
                    placeholder="Hauteur en m">
                  <label for="formGroupExampleInput">Longueur:</label>
                  <input type="text" class="form-control" name="longueur" id="formGroupExampleInput"
                    placeholder="Longueur en m">
                  <label for="formGroupExampleInput">Largeur:</label>
                  <input type="text" class="form-control" name="largeur" id="formGroupExampleInput"
                    placeholder="Largeur en m">
                </div>
              </div>
            </div>
            <div class="form-group d-flex justify-content-center">
              <div class="d-flex flex-column age_position">
                <label for="age">age du bâtiment:</label> <input type="text" name="age" id="age" />
              </div>
              <div class="d-flex flex-column">
              <label for="charpente">Charpente:</label>
              <div class="d-flex">
                <div class="d-flex flex-column">
                <div class="form-check form-check-inline justify-content-center">
                  <div class="d-flex flex-column checkbox2">
                    <i id="checkbox_i4" class="fas fa-check fa-3x"></i>
                <img id="chevrons" src="img/chevrons.jpg" class="img-thumbnail" alt="chevrons" style="height:8em; width:10em;">
              <br>
                <div class="d-flex justify-content-center">
                <input class="form-check-input" type="radio" name="charpente" id="charp1" value="chevrons">
              </div>
              </div>
            </div>
                <label class="form-check-label" for="charpente">Chevrons</label>
              </div>
              <div class="d-flex flex-column">
                <div class="form-check form-check-inline justify-content-center">
                  <div class="d-flex flex-column checkbox2">
                    <i id="checkbox_i5" class="fas fa-check fa-3x"></i>
                <img id="fermettes" src="img/ccb-charpente-indus-13.jpg" class="img-thumbnail" alt="chevrons" style="height:8em; width:10em;">
              <br>
                <div class="d-flex justify-content-center">
                <input class="form-check-input" type="radio" name="charpente" id="charp2" value="fermettes">
              </div>
              </div>
            </div>
                <label class="form-check-label" for="charpente">Fermettes</label>
              </div>
            </div>
          </div>
        </div>



            <div class="form-group">
              <label for="couverture">Couverture</label> :
              <?php include ('checkbox.php'); ?>
            </div>

            <div class="form-group">
              <label for="photo">Photo du bâtiment</label>
              <input type="file" class="form-control-file" name="photo_batiment" id="photo" />
            </div>



            <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
            <input type="button" name="next" class="next action-button" value=" Suivant" />
          </fieldset>

          <fieldset>
            <?php include ('listtest.html'); ?>
            <h3 class="fs-subtitle">Cochez ce qui vous correspond</h3>
            <!-- ajouter une liste d'appareils électriques à cocher le nombre possedé -->
            <div class="form-group row d-flex justify-content-center">
              <div class="col-5">
                <label for="fournisseur">Fournisseur</label> :
                <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                  <label class="btn btn-secondary boutton_fournisseur">
                    <input type="radio" name="fournisseur" value="edf" id="option1" autocomplete="off"> <img
                      src="img/EDF_energy.png" alt="edf" style="max-height: 4em;">
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="fournisseur" value="autre" id="option2" autocomplete="off"> <img
                      src="img/autre_logo.png" alt="autre" style="height:2em;"><br>Autre
                  </label>
                </div>
              </div>
              <div class="row col-7 d-flex justify-content-center">
                <div class="display_chauff ">
                  <div class="form-group chauff_colonne col-6" id="chauffage">
                    <img class="img_chauff1" src="icons/chauffage.png" style="width:24%;">
                    <label for="exampleFormControlSelect2">Chauffage</label>
                    <select class="form-control" name="chauffage" id="exampleFormControlSelect2">
                      <option></option>
                      <option>Chauffage électrique</option>
                      <option>Climatisation (PAC Air/Air)</option>
                      <option>Pompe à chaleur Air/Eau</option>
                      <option>Chauffage gaz, fioul ou bois</option>
                    </select>
                  </div>
                  <div class="form-group chauff_colonne col-6">
                    <img class="img_chauff1" src="icons/logo-eau.png" style="width:30%;">
                    <label for="exampleFormControlSelect1">Chauffage-eau</label>
                    <select class="form-control" name="chauffage_eau" id="exampleFormControlSelect1">
                      <option></option>
                      <option>Résistance électrique</option>
                      <option>Pompe à chaleur</option>
                      <option>Chaudière bois</option>
                      <option>Chaudière gaz</option>
                      <option>Chaudière fuel</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="Nombre_personnes_foyer">Nombre personnes foyer</label> :
              <div class="input-group">
                <input class="numeric float optional form-control" min="1" placeholder="0" type="number" step="any"
                  value="1" name="nombre_personne_foyer" id="nombre_personnes_foyer">
                <div class="input-group-append">
                </div>
              </div>
            </div>


            <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
            <input type="button" name="next" class="next action-button" value="Suivant" />

          </fieldset>

          <fieldset>
            <div class="display_hr">
              <hr class="hr1">
              <h2 class="fs-title">INFORMATIONS PERSONNELLES</h2>
              <hr class="hr2">
            </div>
            <div class="form-row">
              <div class="col-7 mb-3 d-flex align-items-center">
                <div class="custom-control custom-radio custom-control-inline">
                  <input class="custom-control-input" type="radio" value="Homme" name="civilite" id="Monsieur">
                  <label class="custom-control-label" for="Monsieur">Monsieur</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input class="custom-control-input" type="radio" value="Femme" name="civilite" id="Madame">
                  <label class="custom-control-label" for="Madame">Madame</label>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col mb-3">
                <input class="form-control" placeholder="nom" type="text" name="nom" id="nom">
              </div>

              <div class="col mb-3">
                <input class="form-control" placeholder="prenom" type="text" name="prenom" id="prenom">
              </div>
            </div>


            <div class="form-row">
              <div class="col mb-3">
                <input class="form-control" placeholder="email" type="email" name="email" id="mail">
              </div>

              <div class="col mb-3">
                <input class="form-control" placeholder="Telephone" type="text" name="telephone" id="telephone">
              </div>
            </div>

            <div class="form-row">
              <div class="col mb-3">
                <input class="form-control" placeholder="Adresse" type="text" name="adresse" id="adresse">
              </div>

              <div class="col mb-3">
                <input class="form-control" placeholder="code postal" type="text" name="code_postal" id="code_postal">
              </div>

              <div class="col mb-3">
                <input class="form-control" placeholder="Ville" type="text" name="ville" id="ville">
              </div>

            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Plus d'informations</label>
              <textarea class="form-control" name="info_complementaire" id="exampleFormControlTextarea1"
                rows="3"></textarea>
            </div>
            <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
            <input type="submit" name="submit" class="submit action-button" value="Envoyer" />
          </fieldset>
        </form>
      </div>
    </div>
    <!-- /.MultiStep Form -->
  </main>


  <footer>
    <div class="copyright">
      <a href="http://ecosolar.energy/mentions-legales/" target="_blank">Mentions Légales</a>
      <a href="http://ecosolar.energy/rgpd/" target="_blank">Protection des données</a>
      <p>© Création du Formulaire Lilian, Mohamed, Axel, Alain</p>
    </div>
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


</body>

</html>
