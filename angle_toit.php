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


        <canvas class="moncanvas" id="canvas" width="500" height="500"></canvas>

        <form method="POST" id="formulaire_angle">
          <div class="form-group">
            <label for="customRange2">Angle de votre toiture</label>
            <input type="range" class="custom-range"
            min="0" max="50" step="0.1"
            id="customRange2" value=""
            onchange="updateTextInput(this.value);"></br>
            <input type="text" id="textInput" value="">
            <input type="submit" value="Valider" />
          </div>
        </form>
      </div>


    </main>
    <footer>

    </footer>

    <script>

    var formulaire = document.getElementById("formulaire_angle");
    //pour afficher la valeur sélectionnée avec le range
    function updateTextInput(val) {
          document.getElementById('textInput').value=val;
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
    angle = document.getElementById('customRange2').value; //si je met textInput a la place de custom, rien ne s'affiche
    return angle;
    }


    function toiture(){
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      changeangle(); // très important, c'est cette ligne qui permet l'affichage des modifs!!!
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



      document.addEventListener("onchange", changeangle(), false)




    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
  </body>
</html>
