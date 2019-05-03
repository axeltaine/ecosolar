//direction ouest
$("#button_est").click(function() {
  $("#orientation_est").toggle("slow").css("flipInY");
  $("#orientation_ouest").hide();
  $("#orientation_sud").hide();
});
//direction sud
$("#button_sud").click(function() {
  $("#orientation_sud").toggle("slow").css("flipInY");
  $("#orientation_ouest").hide();
  $("#orientation_est").hide();
});
//direction est
$("#button_ouest").click(function() {
  $("#orientation_ouest").toggle("slow").css("flipInY");
  $("#orientation_est").hide();
  $("#orientation_sud").hide();
});
//direction sud_ouest
$("#button_sud_ouest").click(function() {
  $("").toggle("slow").css("flipInY");
  $("#orientation_sud").show();
  $("#orientation_est").show();
  $('#orientation_ouest').hide();
});
//direction sud_est
$("#button_sud_est").click(function() {
  $("").toggle("slow").css("flipInY");
  $("#orientation_sud").show();
  $("#orientation_ouest").show();
  $('#orientation_est').hide();
});
