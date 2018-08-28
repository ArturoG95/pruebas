<?php
if (file_exists(dirname(__FILE__) . '/js/' . basename(__FILE__, 'ctp') . 'js')) {
    $this->start('scriptBody');
    include_once dirname(__FILE__) . '/js/' . basename(__FILE__, 'ctp') . 'js';
    $this->end();
}
?>
<!DOCTYPE html>
<html lang="spa">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
        <div class="login100-form validate-form">
          <span class="login100-form-title p-b-40">
            Registrarse
          </span>

          <div class="init_with_facebook">
            <a id="register_facebook" class="btn-login-with bg1 m-b-10">
              <i class="fab fa-facebook-square"></i>
              Registrarte
            </a>
          </div>
				<form id="registerForm" class="login100-form validate-form">

          <div class="form-group">
            <input id="registerFacebookID" class="input100" type="hidden" name="register_facebook_id" placeholder="Id FB">
            <span class="focus-input100"></span>
          </div>
          <div class="form-group validate-input">
            <input id="registerName" class="input100" type="text" name="register_name" placeholder="Nombre">
            <span class="focus-input100"></span>
          </div>
					<div class="form-group validate-input">
						<input id="registerEmail" class="input100" type="text" name="register_email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
          <div class="form-group validate-input">
            <input id="registerBirth" type="text" class="input100 docs-date" name="register_birthday" placeholder="Selecciona tu fecha: Mes/Día/Año">
            <span class="focus-input100"></span>
          </div>
					<div class="from-group validate-input m-b-16">
						<span class="btn-show-pass">
							<i id="show_pass" class="fa fa-eye"></i>
						</span>
						<input id="register_pass" class="input100" type="password" name="register_password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-b-16">

						<button class="login100-form-btn" type="submit">
							Registrarse
						</button>
					</div>
        </form>
					<div class="flex-col-c p-t-150">

						<a href="/3raVencida/" class="txt3 bo1 hov1">
							Regresar a Login
						</a>
					</div>
			</div>
		</div>
	</div>
</body>
</html>
