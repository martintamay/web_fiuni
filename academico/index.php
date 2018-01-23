<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>FIUNI</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/png" href="../images/LogoT.png" />
	<!--

	Template 2075 Digital Team

	http://www.tooplate.com/view/2075-digital-team

	-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/animate.min.css">
		<link rel="stylesheet" href="../css/et-line-font.css">
		<link rel="stylesheet" href="../css/nivo-lightbox.css">
		<link rel="stylesheet" href="../css/nivo_themes/default/default.css">
		<link rel="stylesheet" href="../css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/../css'>
	</head>
	<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

		<!-- preloader section -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-circle">
			   <div class="sk-circle1 sk-circle"></div>
			   <div class="sk-circle2 sk-circle"></div>
			   <div class="sk-circle3 sk-circle"></div>
			   <div class="sk-circle4 sk-circle"></div>
			   <div class="sk-circle5 sk-circle"></div>
			   <div class="sk-circle6 sk-circle"></div>
			   <div class="sk-circle7 sk-circle"></div>
			   <div class="sk-circle8 sk-circle"></div>
			   <div class="sk-circle9 sk-circle"></div>
			   <div class="sk-circle10 sk-circle"></div>
			   <div class="sk-circle11 sk-circle"></div>
			   <div class="sk-circle12 sk-circle"></div>
			</div>
		</div>

		<?php
			require('../menu.php');
		?>
		<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
		<div id="main" class="main">
			<!-- navigation section -->
			<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
		        		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-superior">
		          			<span class="sr-only">Toggle navigation</span>
		          			<span class="icon-bar"></span>
		          			<span class="icon-bar"></span>
		          			<span class="icon-bar"></span>
		        		</button>
		      		</div>
					<div id="nav-superior" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="http://uni.edu.py/bienestar-universitario/becas-y-oportunidades/" target='_blank'>Becas</a></li>
							<li><a href="javascript:custom.js;" onclick='abrir("cpa")'>CPA</a></li>
							<li><a href="javascript:custom.js;" onclick='abrir("laboratorios")'>Laboratorios</a></li>
							<li><a href="javascript:custom.js;" onclick='abrir("acreditaciones")'>Acreditaciones</a></li>
							<li><a href="javascript:custom.js;" onclick='abrir("")'>Viviendas</a></li>
							<li><a href="javascript:custom.js;" onclick='abrir("carreras")'>Carreras</a></li>
							<li><a href="javascript:custom.js;" onclick='abrir("")'>Direccion</a></li>
							<li><a href="javascript:custom.js;" onclick='abrir("")'>Inf. General</a></li>
							<li><a href="javascript:custom.js;" onclick='abrir("")'>Extensión</a></li>
							<li><a href='javascript:custom.js;' onclick="openNav();" role="button">Menú <i class="fa fa-bars" alt="Menú" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</section>
			<!-- home section -->
			<section id="cabecera">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<!--h1>FIUNI</h1-->
							<a href="../">
								<div class="col-md-1 col-sm-12">
									<img src="../images/LogoT.png" class="img-portada">
								</div>
							</a>
							<div class="col-md-5 col-sm-12">
								<h3>FORMACIÓN DE PROFESIONALES CON SERIEDAD, CALIDAD Y RESPONSABILIDAD ACADÉMICA RECONOCIDA.</h3>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="container-fluid">
				<!-- zona de carga -->
				<iframe id="zona-carga" src="cpa.html" onload="redimensionarZonaCarga()" class="container-fluid"></iframe>
			</div>

			<!-- contact section -->
			<section id="contacto">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 text-center">
							<div class="section-title">
								<h1 class="heading bold">CONTACTENOS</h1>
								<hr>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 contact-info">
							<h2 class="heading bold">INFORMACIÓN DE CONTACTO</h2>
							<p>Para cualquier consulta que necesite no dude en escribirnos o llamarnos.</p>
							<div class="col-md-6 col-sm-4">
								<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
								<p>hello@fiuni.edu.py</p>
							</div>
							<div class="col-md-6 col-sm-4">
								<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> TELÉFONOS</h3>
								<p>010-020-0340 <br> 090-080-0760</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<form action="#" method="get" class="wow fadeInUp" data-wow-delay="0.6s">
								<div class="col-md-6 col-sm-6">
									<input type="text" class="form-control" placeholder="Nombre" name="name">
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="email" class="form-control" placeholder="Email" name="email">
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea class="form-control" placeholder="Mensaje" rows="7" name="message"></textarea>
								</div>
								<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
									<input type="submit" class="form-control" value="ENVIAR MENSAJE">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- footer section -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<hr>
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
							<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
							<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
							<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>


		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/smoothscroll.js"></script>
		<script src="../js/isotope.js"></script>
		<script src="../js/imagesloaded.min.js"></script>
		<script src="../js/nivo-lightbox.min.js"></script>
		<script src="../js/jquery.backstretch.min.js"></script>
		<script src="../js/wow.min.js"></script>
		<script src="../js/custom.js"></script>

	</body>
</html>
