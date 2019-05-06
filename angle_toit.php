<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>Angle toiture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>
    <header>

    </header>
    <main>

      <canvas class="moncanvas" id="canvas" width="500" height="500"></canvas>

      <form>
        <div class="form-group">
          <label for="customRange2">Angle de votre toiture</label>
          <input type="range" class="custom-range"
          min="-50" max="0" step="0.1"
          list="tickmarks" id="customRange2" value="-25"
          oninput="result4.value=parseInt(d.value)">
          <output name="result4">--</output>
        </div>
      </form>



    </main>
    <footer>

    </footer>

    <script>

    $(function() {
    	$('.range').next().text('--'); // Valeur par défaut
    	$('.range').on('input', function() {
		      var $set = $(this).val();
		       $(this).next().text($set);
	     });
    });
    //je sélectionne mon canvas
    var canvas = document.querySelector('.moncanvas');
    //var width = canvas.width = window.innerWidth;
    //var height = canvas.height = window.innerHeight;
    //pour faire un dessin en 2D on précise le ctx
    var ctx = canvas.getContext('2d');

    //fonction qui va convertir les angles en degré en radian
    function degToRad(degrees) {
      return degrees * Math.PI / 180;
    };

    //je déplace le dessin au point 50/50
    ctx.beginPath();
    ctx.moveTo(50, 100);
    //je commence le dessin
    ctx.lineTo(150, 100);
    var triHeight = 50 * Math.tan(degToRad(-50));
    ctx.lineTo(100, 100+triHeight);
    ctx.lineTo(50, 100);
    ctx.fillStyle = '#FF671F';
    ctx.fill();
    ctx.closePath();

    angletoiture = document.querySelector("#customRange2");
    angletoiture.addEventListener("input", changeangle, false);
    function changeangle(event) {
      constantNode.offset.value = volumeControl.value;
    }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
  </body>
</html>
