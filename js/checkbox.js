$( "#inlineRadio1" ).click(function() {
  $( "#checkbox_i" ).show( "slow" );
  $("#checkbox_i1").hide();
  $("#checkbox_i2").hide();
  $("#checkbox_i3").hide();
});

$( "#inlineRadio1" ).click(function(){
  $('#acier').css("background-color", "#fF671F");
  $('#terrase').css("background-color", "white");
  $('#tuile').css("background-color", "white");
  $('#ardoise').css("background-color", "white");
});

$( "#inlineRadio2" ).click(function() {
  $( "#checkbox_i1" ).show( "slow" );
  $("#checkbox_i").hide();
  $("#checkbox_i2").hide();
  $("#checkbox_i3").hide();
});

$( "#inlineRadio2" ).click(function(){
  $('#ardoise').css("background-color", "#fF671F");
  $('#terrase').css("background-color", "white");
  $('#tuile').css("background-color", "white");
  $('#acier').css("background-color", "white");
});

$( "#inlineRadio3" ).click(function() {
  $( "#checkbox_i2" ).show( "slow" );
  $("#checkbox_i1").hide();
  $("#checkbox_i").hide();
  $("#checkbox_i3").hide();
});

$( "#inlineRadio3" ).click(function(){
  $('#tuile').css("background-color", "#fF671F");
  $('#terrase').css("background-color", "white");
  $('#acier').css("background-color", "white");
  $('#ardoise').css("background-color", "white");
});

$( "#inlineRadio4" ).click(function() {
  $( "#checkbox_i3" ).show( "slow" );
  $("#checkbox_i1").hide();
  $("#checkbox_i2").hide();
  $("#checkbox_i").hide();
});

$( "#inlineRadio4" ).click(function(){
  $('#terrase').css("background-color", "#fF671F");
  $('#acier').css("background-color", "white");
  $('#tuile').css("background-color", "white");
  $('#ardoise').css("background-color", "white");
  });

  //*****CHECKBOX PARTIE CHARPENTE******//

$('#charp1').click(function(){
  $( "#checkbox_i4" ).show( "slow" );
    $("#checkbox_i5").hide();
})

$( "#charp1" ).click(function(){
  $('#chevrons').css("background-color", "#fF671F");
  $('#fermettes').css("background-color", "white");
})

$('#charp2').click(function(){
  $( "#checkbox_i5" ).show( "slow" );
      $("#checkbox_i4").hide();
})

$( "#charp2" ).click(function(){
  $('#fermettes').css("background-color", "#fF671F");
  $('#chevrons').css("background-color", "white");
})
