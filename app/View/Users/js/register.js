var RegisterForm = $('#registerForm');
$(document).ready(function(){

$('#show_pass').click(function(){
    if($('#register_pass').attr("type") == "password"){
    $('#register_pass').removeAttr('type','password');
    $('#register_pass').attr('type','text');
  } else if($('#register_pass').attr("type") == "text") {
    $('#register_pass').removeAttr('type','text');
    $('#register_pass').attr('type','password');
}

});

$('#register_facebook').click(function(){
    register_with_facebook();
});

function register_with_facebook() {
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            FB.api('/me?fields=id,name,email,picture', function (response) {
                alert('Ya tiene una cuenta ligada a facebook, inicie sesion.');
            });
        } else {
            FB.login(function (response) {
                if (response.authResponse) {
                    FB.api('/me?fields=id,name,email', function (response) {
                      $('#registerFacebookID').val(response.id);
                        $('#registerEmail').val(response.email).attr('readonly',true);
                        $('#registerName').val(response.name).attr('readonly',true);;

                        var facebook_id = document.createElement('input');
                        facebook_id.value = response.id;
                        facebook_id.type = 'hidden';
                        facebook_id.name = '';
                        facebook_id.id = 'facebook_id';
                        RegisterForm.append(facebook_id);

                        var facebook_email = document.createElement('input');
                        facebook_email.value = response.email;
                        facebook_email.type = 'hidden';
                        facebook_email.name = '';
                        facebook_email.id = 'facebook_email';
                        RegisterForm.append(facebook_email);
                    });
                } else {
                    alert('Se ha cancelado el registro con facebook.');
                    window.location = '/3raVencida/users/register';
                }
            }, {scope: 'email'});
        }
    });
}

  window.fbAsyncInit = function() {
      FB.init({
        appId      : '{515201195586858}',
        cookie     : true,
        xfbml      : true,
        version    : 'v3.1'
      });

      FB.AppEvents.logPageView();

    };

// Load the SDK asynchronously
    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1&appId=515201195586858&autoLogAppEvents=1';
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));

});

function register_data() {
  $.ajax({
        type: 'POST',
        url: 'http://localhost:8888/3raVencida/users/do_register',
        data : $('#registerForm').serialize(),
        dataType : 'json',
        beforeSend: function(){
            blockUI();
        },
        success: function(data) {
          console.log(data);
            if(data.result == "ok"){
              unblockUI();

              alert("Información registrada correctamente");
              window.location.href = 'http://localhost:8888/3raVencida/';
            }
            else{
              alert("No se guardo ELSE");
            }
        },
        error: function(){
              alert("No se guardo ERROR");
        }
    });
}

$('#registerForm').submit(function( event ) {
  event.preventDefault();
  register_data();
});
