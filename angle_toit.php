<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Angle toiture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="angle_toit.css" />
  </head>

  <body>
    <header>

    </header>
    <main>
      <div id="angle_form">

        <div>
          <h1>Inclinaison de la toiture</h1>
        </div>

        <canvas class="moncanvas" id="canvas" width="500" height="500"></canvas>

        <form method="POST" id="formulaire_angle">
          <label>Angle d'inclinaison approximatif de votre toiture en °</label>
          <div class="form-check form-check-inline"><!--!!!!!!!!!!!!!!!!!!! le onclick est nécessaire pour récupérer la valeur de l'input -->
            <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);" name="inlineRadioOptions" id="angle1" value="5">
            <label class="form-check-label" for="inlineRadio1">5</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);" name="inlineRadioOptions" id="angle2" value="20">
            <label class="form-check-label" for="inlineRadio2">20</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);" name="inlineRadioOptions" id="angle3" value="35" checked>
            <label class="form-check-label" for="inlineRadio3">35</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onclick="updateTextInput(this.value);" name="inlineRadioOptions" id="angle4" value="45">
            <label class="form-check-label" for="inlineRadio4">45</label>
          </div>
        </form>
      </div>


    </main>
    <footer>

    </footer>

    <script>

    var formulaire = document.getElementById("formulaire_angle");
    //fonction qui récupère la valeur du bouton sélectionné
    function updateTextInput(val) {
          document.getElementsByName('inlineRadioOptions').value=val;
        }
    //je sélectionne mon canvas
    var canvas = document.querySelector('.moncanvas');
    //pour faire un dessin en 2D on précise le ctx
    var ctx = canvas.getContext('2d');

    //fonction qui va convertir les angles en degré en radian
    function degToRad(degrees) {
      return degrees * Math.PI / 180;
    };

    var angle;

    function changeangle(){
    angle = document.getElementsByName('inlineRadioOptions').value; //si je met textInput a la place de custom, rien ne s'affiche
    return angle;
    }


    function toiture(){
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      if(angle = changeangle()){
        changeangle(); // très important, c'est cette ligne qui permet l'affichage des modifs!!!
      }else{
        angle = 35;
      }
      //je déplace le dessin au point 50/50
      ctx.beginPath();
      ctx.moveTo(50, 300);
      //je commence le dessin
      ctx.lineTo(150, 300);
      var triHeight = 50 * Math.tan(degToRad(-angle));
      ctx.lineTo(100, 300+triHeight);
      ctx.lineTo(50, 300);
      ctx.fillStyle = '#FF671F';
      ctx.fill();
      ctx.closePath();
      requestAnimationFrame(toiture);
    }
    toiture();



      document.addEventListener("onclick", changeangle(), false)




    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
  </body>
</html>
