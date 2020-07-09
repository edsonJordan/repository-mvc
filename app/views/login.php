<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php  echo RUTA_URL; ?>/css/main.css">
</head>
<body class="hover"  style="background-color: #78909c ">
	
	<form  action="<?php echo RUTA_URL;?>/login" method="post" autocomplete="off" class="full-box logInForm">
		<p class="text-center "><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-uppercase">Inicia sesión con tu cuenta</p>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserEmail">E-mail</label>
		  <input class="form-control" name="correo" id="UserEmail" type="email">
          <p class="help-block">Escribe tú E-mail</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserPass">Contraseña</label>
		  <input class="form-control" name="pass" id="UserPass" type="password">
		  <p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
		</div>
		<div>
		<label>No tienes cuenta? <a href="<?php echo RUTA_URL;?>login/agregar">Registrate</a></label>
		</div>
       </form>
	<!--====== Scripts -->
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/material.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/ripples.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/sweetalert2.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/main.js"></script>
    <script>
		$.material.init();
	</script>
	
</body>

	
	
</html>