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
  ctx.moveTo(100, 400);
  //je commence le dessin
  ctx.lineTo(400, 400);
  var triHeight = 300 * Math.tan(degToRad(-angle));
  ctx.lineTo(250, 400+triHeight);
  ctx.lineTo(100, 400);
  ctx.fillStyle = '#FF671F';
  ctx.fill();
  ctx.closePath();
  requestAnimationFrame(toiture);
}
toiture();



  document.addEventListener("onchange", changeangle(), false)