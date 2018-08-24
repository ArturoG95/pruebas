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
            Iniciar Sesión
          </span>

          <div>
            <a href="#" class="btn-login-with bg1 m-b-10">
              <i class="fab fa-facebook-square"></i>
              Iniciar sesión
            </a>
          </div>
				<form id="loginForm" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i id="show_pass" class="fa fa-eye"></i>
						</span>
						<input id="login_pass" class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">

						<button class="login100-form-btn" type="submit">
							Iniciar Sesión
						</button>
					</div>
        </form>
					<div class="flex-col-c p-t-150">
						<span class="txt2 p-b-10">
							Crea tu cuenta
						</span>

						<a href="/3raVencida/users/register" class="txt3 bo1 hov1">
							Regístrate
						</a>
					</div>
			</div>
		</div>
	</div>
</body>
</html>
