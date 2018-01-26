<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>FIUNI</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" type="image/png" href="images/LogoT.png" />
<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
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

	<div id="menu"></div>
	<div id="main" class="main">
		<?php
			require('menu.php');
		?>

		<!-- navigation section -->
		<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
			    	<img src="images/LogoT.png" class="img-portada navbar-brand">
	        		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-superior">
	          			<span class="sr-only">Toggle navigation</span>
	          			<span class="icon-bar"></span>
	          			<span class="icon-bar"></span>
	          			<span class="icon-bar"></span>
	        		</button>
	      		</div>
				<div id="nav-superior" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home" class="smoothScroll">Inicio</a></li>
						<li><a href="#noticias" class="smoothScroll">Noticias</a></li>
						<li><a href="#biblioteca" class="smoothScroll">Bibliotecas</a></li>
						<li><a href="http://www.fiuni.edu.py/moodle/login/index.php">Moodle</a><li>
						<li><a href="#contacto" class="smoothScroll">Contacto</a></li>
						<li><a href='javascript:custom.js;' onclick="openNav();" role="button">Menú <i class="fa fa-bars" alt="Menú" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- home section -->
		<section id="home">
			<!-- noticias section -->
			<div id="noticias" class="container">
				<div class="centrado-porcentual">
					<div class="row">
						<div class="col-md-12 col-sm-12 text-center">
							<div class="section-title">
								<img src="images/LogoT.png" class="img-portada">
								<h1 class="bold">Últimas Noticias</h1>
								<hr>
							</div>
						</div>
					</div>
					<div id="homeCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#homeCarousel" data-slide-to="1"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active ">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3>Especialización en dirección de empresas de ingeniería</h3>
										<small>Publicado el <strong>17 de Octubre del 2017</strong></small>
										<span class="label label-success">FIUNI</span>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<p>Titulados en carreras técnicas como Ingenieros, Arquitectos,
													Administradores de empresas, Directivos de empresas, Gerentes y profesionales en general con una experiencia profesional
													garantizada y en cargos de responsabilidad ya sea en obras o emprendimientos de ingeniería.</p>
												<a href="#" class="btn btn-danger float-right">Leer Mas</a>
											</div>
											<!--div class="col-md-3 col-sm-12">
												<img src="images/noticias/titulado.jpg" alt="noticia img">
											</div-->
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3>Horario de Clases Semestrales 2017</h3>
										<small>Publicado el <strong>19 de Octubre del 2017</strong></small>
										<span class="label label-success">SECRETARIA</span>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<p>Ya estan disponibles los horario de clases semestrales de todas las carreras de la FIUNI...</p>
												<a href="#" class="btn btn-danger float-right">Leer Mas</a>
											</div>
										</div>
										<!--div class="col-md-3 col-sm-12">
											<img src="images/LogoT.png" alt="noticia img">
										</div-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- work section -->
		<section id="biblioteca">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-title">
							<!--<strong>Vibliotecas Virtuales</strong>-->
							<h1 class="heading bold">Bibliotecas Virtuales</h1>
							<hr>
						</div>
					</div>
					<a href="https://doaj.org/" target="_blank">
						<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
							<img src="images/logos/doaj.png"></img>
								<h3>DOAJ</h3>
								<hr>
								<p>El DOAJ es una lista de revistas de la comunidad de acceso libre y pretende ser el punto de partida para todas las búsquedas de información sobre materiales de acceso libre creados ​​por pares.</p>
						</div>
					</a>
					<a href="http://network.bepress.com/" target="_blank">
						<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
							<img src="images/logos/noa.png"></img>
								<h3>Network Open Access</h3>
								<hr>
								<p>Network Open Access es una red de información de acceso libre con materiales educativos de gran variedad.</p>
						</div>
					</a>
					<a href="http://www.cicco.org.py/" target="_blank">
						<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
							<img src="images/logos/cicco_logo.png"></img>
								<h3>CICCO</h3>
								<hr>
								<p>El CICCO ofrece acceso a miles de revistas y libros, en formato electrónico, producidos por las editoriales más prestigiosas.</p>
						</div>
					</a>
				</div>
			</div>
		</section>
	</div>
	<!-- contact section -->
	<section id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center">
					<div class="section-title">
						<h1 class="heading bold">CONTÁCTENOS</h1>
						<hr>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 contact-info">
					<h2 class="heading bold">INFORMACIÓN DE CONTACTO</h2>
					<p>Para cualquier consulta que necesite no dude en escribirnos o llamarnos.</p>
					<div class="col-md-6 col-sm-4">
						<h3><i class="fa fa-envelope fa-2x wow bounceIn" aria-hidden="true" data-wow-delay="0.6s"></i> EMAIL</h3>
						<p><a href="mailto:hello@fiuni.edu.py">hello@fiuni.edu.py</a></p>
					</div>
					<div class="col-md-6 col-sm-4">
						<h3><i class="fa fa-phone fa-2x wow bounceIn" aria-hidden="true" data-wow-delay="0.6s"></i> TELÉFONO</h3>
						<p><a href="tel:+59571207079">(+595) (71) 207079</a></p>
					</div>
					<div class="col-md-6 col-sm-4">
						<h3><i class="fa fa-fax fa-2x wow bounceIn" aria-hidden="true" data-wow-delay="0.6s"></i> FAX</h3>
						<p><a href="fax:+59571207666">(+595) (71) 207666</a></p>
					</div>
					<div class="col-md-6 col-sm-4">
						<h3><i class="fa fa-map-marker fa-2x wow bounceIn" aria-hidden="true" data-wow-delay="0.6s"></i> UBICACION</h3>
						<p><a href="https://goo.gl/maps/aa9XDVrJBDm" target="_blank"> Abg. Lorenzo Zacarias Nº 255 c/ Ruta 1 Km. 2,5 - Campus Universitario UNI - Itapúa – Paraguay</a></p>
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

	<!-- footer section -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<ul class="social-icon">
						<li><a href="http://www.facebook.com" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
						<li><a href="http://www.twitter.com" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
						<!--<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
						<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
						<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>-->
					</ul>
				</div>
			</div>
		</div>
	</footer>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/jquery.backstretch.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/noticias.js"></script>

</body>
</html>
