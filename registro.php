<!DOCTYPE HTML>
<html>
	<head>
		<title>Información de Extensión y Servicios a la Comunidad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <link rel="stylesheet" href="./assets/css/main.css"/>
		<script src="./assets/js/jquery-3.2.1.min.js"></script>

	</head>
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
							<section>
								<header class="main align-center">
									<h2>Registro de usuario</h2>
								</header>
								<div class="row aln-center formulario">
									<form  method="POST" id="formdata"  name ="formdata" onsubmit="return validacion()">
										<div class="row aln-center gtr-uniform ">
											<div class="col-5 col-12-xsmall">
												<label for="nombres">Nombres</label>
												<input type="text" name="nombres" id="nombres"  required>
											</div>
											<div class="col-5 col-12-xsmall">
												<label for="apellidos">Apellidos</label>
												<input type="text" name="apellidos" id="apellidos"  required>
											</div>
											<div class="col-5 col-12-xsmall">
												<label for="carrera">Carrera Actual</label>
												<input type="text" name="carrera" id="carrera" required>
											</div>
											<div class="col-5 col-12-xsmall">
											<label for="email">E-mail</label>
												<input type="email" name="email" id="email" required>
											</div>
											
											<div class="col-5 col-12-xsmall">
												<label for="user">Usuario</label>
												<input type="text" name="user" id="user" placeholder="Usuario para ingreso a plataforma" required>
											</div>
											<div class="col-5 col-12-xsmall">
											<label for="pass">Contraseña</label>
												<input type="password" name="pass" id="pass" placeholder="Contraseña" >
											</div>
											
											<div class="col-5 col-12-xsmall">
												<input type="hidden" type="" name="pren" id="pren" hidden="true">
											</div><br>
											<div class="col-5 col-12-xsmall">
												<input type="hidden" name="tipo" id="tipo" value="3"  hidden="true" >
											</div><br>

											
										</div>
										<div class="align-center">
												<div class="aln-center">
													<button id="btnguardar" value="Registrarme"class="primary small">registro</button>
													<a href="./index.php">Iniciar Sesión</a>
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
			<script src="./assets/js/jquery-3.2.1.min.js"></script>
			<script src="./js/Registro.js"></script>

	</body>
</html>

<script type="text/javascript">
	
</script>