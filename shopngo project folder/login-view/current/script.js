$(document).ready(function() {
  $("#connectForm").hide();
  $("#loginForm").hide();
  $("#signupWrapper").hide();
});

$("#connectButton").click(function() {

  $("#connectForm").toggle();

  $("#loginForm").hide();
  $("#signupWrapper").hide();

});

$("#loginButton").click(function() {

  $("#loginForm").toggle();

  $("#connectForm").hide();
  $("#signupWrapper").hide();
});

$("#signupButton").click(function() {

  $("#signupWrapper").toggle();

  $("#connectForm").hide();
  $("#loginForm").hide();

});
