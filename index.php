<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Devis</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="css/test.css" rel="stylesheet">
  <link href="listtest.css" rel="stylesheet">
  <link rel="stylesheet" href="css/maison.css" />
  <link href="angle_toit.css" rel="stylesheet">
</head>

<body>
  <header>



  </header>
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
      <img class="logo rounded mx-auto d-block" src="icone-pastille-ecosolar-rvb.png" />
    </div>
  </div>

  <!-- MultiStep Form -->
  <div class="row">
    <div class="col-md-12 col-md-offset-0">
      <form id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Information personnel</li>
          <li>Toiture</li>
          <li>Bâtiment</li>
          <li>Consommation</li>
          <li>Appareils et utilisateurs</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
          <h2 class="fs-title">Information personnel</h2>

          <div class="form-group">
            <label for="nom">Nom*</label> : <input type="text" name="nom" id="nom" />
          </div>

          <div class="form-group">
            <label for="prenom">Prenom*</label> : <input type="text" name="prenom" id="prenom" />
          </div>

          <div class="form-group">
            <label for="mail">Email*</label> : <input type="text" name="mail" id="mail" />
          </div>

          <div class="form-group">
            <label for="tel">Telephone</label> : <input type="text" name="tel" id="tel" />
          </div>

          <div class="form-group">
            <label for="adresse">Adresse*</label> : <iframe
              src="https://www.google.com/maps/embed?pb=!1m13!1m11!1m3!1d158.0865126246605!2d4.721117603613022!3d49.769271626808745!2m2!1f0!2f45!3m2!1i1024!2i768!4f35!5e1!3m2!1sfr!2sfr!4v1557730017861!5m2!1sfr!2sfr"
              width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe><input type="text"
              name="adresse" id="adresse" />

          </div>

          <input type="button" name="next" class="next action-button" value=" suivant" />
        </fieldset>

        <fieldset>
          <h2 class="fs-title">Informations sur la toiture</h2>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="orientation">Orientation*</label> : <br>
                  <!-- ligne contenant l'orientation avec les triangles animer en jquery -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex bloc_orientation">
                    <div class="maison">
                      <img id="ouest" src="img/ouest.png" />
                      <img id="nord_ouest" src="img/nord_ouest.png" />
                      <img id="nord" src="img/nord.png" />
                      <img id="est" src="img/est.png" />
                      <img id="nord_est" src="img/nord-est.png" />
                    </div>
                    <div class="button">
                      <button id="button_ouest" type="button" class="btn btn-primary">Ouest</button>
                      <button id="button_nord_ouest" type="button" class="btn btn-primary">Nord_ouest</button>
                      <button id="button_nord" type="button" class="btn btn-primary">Nord</button>
                      <button id="button_est" type="button" class="btn btn-primary">Est</button>
                      <button id="button_nord_est" type="button" class="btn btn-primary">Nord_est</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- fin du bloc orientation -->
              <div class="col">
                <div id="angle_form">
                <label for="customRange2">Angle de votre toiture</label>
                  <div class="form-group">
                    
                    <canvas class="moncanvas" id="canvas" width="500" height="500"></canvas>
                    <input type="range" class="custom-range" min="0" max="50" step="0.1" id="customRange2" value=""
                      onchange="updateTextInput(this.value);">
                    <input type="text" id="textInput" value="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="surface">Surface*</label> : <input type="text" name="surface" id="surface" />
          </div>




          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value=" suivant" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Informations sur le bâtiment</h2>

          <div class="form-group">
            <label for="age">age</label> : <input type="text" name="age" id="age" />
          </div>

          <div class="form-group">
            <label for="cotation">cotation</label> : <input type="text" name="cotation" id="cotation" />
          </div>

          <div class="form-group">
            <label for="charpente">Charpente</label> : <input type="text" name="charpente" id="charpente" />
          </div>
          <div class="form-group">
            <label for="couverture">Couverture</label> : <input type="text" name="couverture" id="couverture" />
          </div>

          <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control-file" name="photo" id="photo" />
          </div>


          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value=" suivant" />
        </fieldset>
        <fieldset>
          <h2 class="fs-title">Informations sur la consommation</h2>

          <div class="form-group">
            <label for="consommation">Consommation*</label> : <input type="text" name="consommation"
              id="consommation" />
          </div>
          <div class="form-group">
            <label for="fournisseur">Fournisseur</label> : </br>
            <button type="button" class="btn btn-primary btn-lg">EDF</button>
            <button type="button" class="btn btn-secondary btn-lg">Autre</button>
          </div>
          <div class="form-group">
            <label for="chauffage">Chauffage</label> : <input type="text" name="chauffage" id="chauffage" />
          </div>
          <div class="form-group">
            <label for="chauffage_eau">Chauffage-eau</label> : <input type="text" name="chauffage_eau"
              id="chauffage_eau" />
          </div>


          <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
          <input type="button" name="next" class="next action-button" value="suivant" />
        </fieldset>

        <fieldset>
          <?php include ('listtest.html'); ?>
          <h3 class="fs-subtitle">Cochez ce qui vous correspond</h3>
          <!-- ajouter une liste d'appareils électriques à cocher le nombre possedé -->
          <div class="form-group">
            <label for="Nombre_personnes_foyer">Nombre personnes foyer</label> : <input type="text"
              name="Nombre_personnes_foyer" id="Nombre_personnes_foyer" />
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
  <script src="test.js"></script>
  <script src="maison.js"></script>
  <script src="angle.js"></script>

</body>

</html>