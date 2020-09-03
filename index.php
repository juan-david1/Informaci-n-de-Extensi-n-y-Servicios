<!DOCTYPE HTML>
<html>
	<head>
		<title>Información de Extensión y Servicios a la Comunidad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <link rel="stylesheet" href="./assets/css/main.css"/>
	</head>
<?php
    session_start();
    if(!empty($_SESSION['us_tipo'])){
        header('location: controlador/LoginController.php');
    }
    else{
        session_destroy();
?>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">
                                <h2 class="align-center">Información de Extensión y Servicios a la Comunidad <br>Universidad Católica Luis Amigó</h2>
							</header>

							<!-- Banner -->
								<section id="banner">
									<div class="row">
										<div class="col-8 col-12-small">
											<header>
												<h2 class="align-center">Bienvenidos</h2>
												<p>Al sistema de Información de Extensión y Servicios a la Comunidad de la universidad católica luis amigó</p>
											</header>
											<p>En este portal encontraras información de interes para toda la comunidad. Tendras acceso a diferentes modulos donde estaras actualizado en todo momento. <br><br>Te invito ha que <a href="#user" >ingrese con tu cuenta </a> para que tengas acceso a toda la información de nuestros servicios.</p>
										</div>
									</div>
									<div class="col-6 col-12-small">
										<h2>Iniciar sesión</h2>
										<form action="controlador/LoginController.php" method="post">
											<div class="row gtr-uniform">

												<div class="col-5 col-12-xsmall">
													<h4>Usuario</h4>
													<input autocomplete="off" type="text" name="user" id="user">
												</div>

												<div class="col-5 col-12-xsmall">
													<h4>Contraseña</h4>
													<input  autocomplete="off" type="password" name="pass" id="pass">
												</div>
												<div class="col-12-xsmall">
													<input type="submit" value="Inicia Sesión" class="primary small">													
													<a href="./registro.php" class="header"> Registro nuevo</a>
												</div>
											</div>
										</form>
									</div>
								</section>
							<!-- Section -->
						</div>
					</div>
			</div>

		<!-- Scripts -->
			
			<script src="./assets/js/jquery.min.js"></script>
			<script src="./assets/js/browser.min.js"></script>
			<script src="./assets/js/breakpoints.min.js"></script>
			<script src="./assets/js/util.js"></script>
			<script src="./assets/js/main.js"></script>


	</body>
</html>
<?php
}
?>