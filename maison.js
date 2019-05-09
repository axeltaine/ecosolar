$("#button_ouest").click(function() {
  $("#ouest").toggle();
  $("#est").hide();
  $("#nord_est").hide();
  $("#nord_ouest").hide();

});

$("#button_nord_ouest").click(function() {
  $("#nord_ouest").toggle();
  $("#ouest").hide();
  $("#nord_est").hide();
  $("#est").hide();

});

$("#button_est").click(function() {
  $("#est").toggle();
  $("#ouest").hide();
  $("#nord_est").hide();
  $("#nord_ouest").hide();

});

$("#button_nord_est").click(function() {
  $("#nord_est").toggle();
  $("#est").hide();
  $("#nord_ouest").hide();
  $("#ouest").hide();

});

$("#button_nord").click(function() {
  $("#nord").show();
  $("#est").hide();
  $("#nord_ouest").hide();
  $("#ouest").hide();

});
