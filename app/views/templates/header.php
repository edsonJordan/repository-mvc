<?php/*  require RUTA_APP . '\controllers\Login.php';*/  ?> 
<?php 
 $usuario = $this->usuarioModelo->obtenerUsuariosId($_SESSION['codigo']);
 $_SESSION['usuario'] = $usuario->name_cliente;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php  echo RUTA_URL; ?>/css/main.css">
</head>
<body >
	<!-- SideBar -->
	<section  class="full-box cover dashboard-sideBar">
		<div    class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div style="background-color: #007E33;"  class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div  class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Puerto 25 <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div  class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">
					<?php //echo $usuario['name_cliente'];
				echo $_SESSION['usuario'];
				 ?>
					</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a placeholder="indica valor" href="<?php echo RUTA_URL."usuarios/editar"; ?>">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
			<?php 
	 $hola = $this->usuarioModelo->consultapermiso($_SESSION['codigo']);
		if($hola==true){
			$carga=$hola;
		}
		if($hola==false){
			$carga=$hola;
		}
		if ($carga==!null){
			?>
			<li>
					<a href="<?php echo RUTA_URL."administraciones"; ?>">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Sistema 
					</a> 
				</li>
				
			<?php
			   }
			if($carga==null) {
	
			}
			 ?>
			 	<li>
					<a href="<?php echo RUTA_URL.""; ?>">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio 
					</a> 
				</li>
				<li>
					<a  href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Operaciones <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo RUTA_URL."operaciones/compra"; ?>"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Compra</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Reservas</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Generales</a>
						</li>
					</ul>
				</li>
				<li>
					<a  href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administracion <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Period</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Subject</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Section</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Salon</a>
						</li>
					</ul>
				</li>
				<li>
					<a  href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Paquetes Turisticos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Paquetes Disponibles</a>
						</li>
						<li>
							<a href="<?php echo RUTA_URL."paginas"; ?>"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Ocupaciones</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Detalles</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo RUTA_URL."usuarios"; ?>"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administrar</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Tipos de pagos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="#"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registration</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Configuracion <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo RUTA_URL."usuarios/password";  ?>"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Cambiar contraseña</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	<!-- Content page-->
	<section   class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav  style="background-color: #007E33;" class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-view-list-alt"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		
	<!-- Notifications area -->
	<!--====== Scripts -->