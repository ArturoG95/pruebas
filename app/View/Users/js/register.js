$(document).ready(function(){


});

$('#show_pass').click(function(){
    if($('#register_pass').attr("type") == "password"){
    $('#register_pass').removeAttr('type','password');
    $('#register_pass').attr('type','text');
  } else if($('#register_pass').attr("type") == "text") {
    $('#register_pass').removeAttr('type','text');
    $('#register_pass').attr('type','password');
  }
});
