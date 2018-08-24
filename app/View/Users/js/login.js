$(document).ready(function(){


});

$('#show_pass').click(function(){
    if($('#login_pass').attr("type") == "password"){
    $('#login_pass').removeAttr('type','password');
    $('#login_pass').attr('type','text');
  } else if($('#login_pass').attr("type") == "text") {
    $('#login_pass').removeAttr('type','text');
    $('#login_pass').attr('type','password');
  }
});
