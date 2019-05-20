$("#button_ouest").click(function() {
  $("#ouest").toggle();
  $("#est").hide();
  $("#Sud_est").hide();
  $("#Sud_ouest").hide();

});

$("#button_Sud_ouest").click(function() {
  $("#Sud_ouest").toggle();
  $("#ouest").hide();
  $("#Sud_est").hide();
  $("#est").hide();

});

$("#button_est").click(function() {
  $("#est").toggle();
  $("#ouest").hide();
  $("#Sud_est").hide();
  $("#Sud_ouest").hide();

});

$("#button_Sud_est").click(function() {
  $("#Sud_est").toggle();
  $("#est").hide();
  $("#Sud_ouest").hide();
  $("#ouest").hide();

});

$("#button_Sud").click(function() {
  $("#Sud").show();
  $("#est").hide();
  $("#Sud_ouest").hide();
  $("#ouest").hide();
  $("Sud_est").hide();
});
