$(document).ready(function(){
  $("#button_ouest").click(function() {
    $("#ouest").toggle(true);
    $("#est").toggle(false);
    $("#Sud_est").toggle(false);
    $("#Sud_ouest").toggle(false);
    $("#Sud").toggle(false);

});

$("#button_Sud_ouest").click(function() {
  $("#ouest").toggle(false);
    $("#est").toggle(false);
    $("#Sud_est").toggle(false);
    $("#Sud_ouest").toggle(true);
    $("#Sud").toggle(false);

});

$("#button_est").click(function() {
  $("#ouest").toggle(false);
  $("#est").toggle(true);
  $("#Sud_est").toggle(false);
  $("#Sud_ouest").toggle(false);
  $("#Sud").toggle(false);

});

$("#button_Sud_est").click(function() {
  $("#ouest").toggle(false);
  $("#est").toggle(false);
  $("#Sud_est").toggle(true);
  $("#Sud_ouest").toggle(false);
  $("#Sud").toggle(false);

});

$("#button_Sud").click(function() {
  $("#ouest").toggle(false);
  $("#est").toggle(false);
  $("#Sud_est").toggle(false);
  $("#Sud_ouest").toggle(false);
  $("#Sud").toggle(true);
});
});
