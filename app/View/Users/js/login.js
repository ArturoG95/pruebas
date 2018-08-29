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

$('#loginForm').submit(function( event ) {
  event.preventDefault();
    if (!$("#loginForm").valid()){
      sendNoty("warning","Favor de llenar todos los campos.");
        return false;
      }else{
  $.ajax({
        type: 'POST',
        url: 'http://localhost:8888/3raVencida/users/do_login',
        data : $('#loginForm').serialize(),
        dataType : 'json',
        beforeSend: function(){
            blockUI();
        },
        success: function(data) {
          console.log(data);
            if(data.result == "ok"){
              unblockUI();
              window.location = '/3raVencida/dashboard';
            }
            else{
              sendNoty("error","No se guardo ELSE");
            }
        },
        error: function(){
              sendNoty("error","No se guardo ERROR");
        }
    });
  }
});

$('#loginForm').validate({
    errorElement:'span',
    errorClass: 'help-block help-block-error',
    focusInvalid: true,
    ignore: "",
    rules: {
        'email': {
            required: true
        },
        'password': {
            required: true
        }
    },
    messages: {
        'email': {
            required: 'Ingresa tu correo electronico.',
        },
        'password': {
            required: 'Por favor, escribe tu contraseña.',
        }
    },
    highlight: function (element) {
        $(element).closest('.input100').addClass('has-error');
    },
    unhighlight: function (element) {
        $(element).closest('.input100').removeClass('has-error');
    },
    success: function (label) {
        label.closest('.input100').removeClass('has-error');
        label.remove();
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    }
});
