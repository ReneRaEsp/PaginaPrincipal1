<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ramesptop web design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="grid.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/31c64c925d.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Anton|Francois+One|Noto+Sans+TC|ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">  
	<link  rel="icon"   href="img/favicon.png" type="image/png" />
</head>
<body>
	<div class="contenedor">
		<header id="header" class="header">

			<div class="fadeA d-flex justify-content-between row">
				<div class="logo d-flex justify-content-between">
					<img class="img-fluid logoR" loading="lazy" src="img/logoR6.png" alt="" >
					<i id="btn-menu" class="icono btn-menu h3 fas fa-bars"></i>
				</div>
				<nav id="enlaces" class="menu justify-content-between flex-wrap mr-4">
					<a id="btn-Inicio" class="links" href="index.view.php"><i class="fas fa-home"></i> Inicio</a>
					<a id="btn-Redes" class="links" href="#"><i class="fas fa-users"></i> Redes Sociales</a>
					<!--<a id="btn-Acerca" class="links" href="#">Acerca de</a>-->
					<a id="btn-Portafolio" class="links" href="#"><i class="fas fa-suitcase"></i> Portafolio</a>
					<a id="btn-Contacto" class="links" href="#"><i class="far fa-envelope"></i> Contacto</a>
				</nav>
			</div>
		</header>
		<div class="contenido1">
			<div class="d-none d-md-flex carousel slide carousel-fade" id="slideshow" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slideshow" data-slide-to="0" class="active">
						
					</li>
					<li data-target="#slideshow" data-slide-to="1">
						
					</li>
					<li data-target="#slideshow" data-slide-to="2">
						
					</li>		
				</ol>


				<div class="carousel-inner ">
					
					<div class="carousel-item active">
							<p class="titulo p-2">Diseño de páginas web</p>
						<div class="imagenYParrafo ">
							<img class="imagenes imagen1 m-2" src="img/PC1.jpg" loading="lazy">
							<div class="parrafo">
								<p class="h1 centrado">Desarrollo Web a tu medida<p>
								<p class="justificado p-2"> Te ayudamos a llegar a más clientes con un sitio web atractivo y funcional.</p>
								<img class= "img-fluid imagenC" src="img/CS2.jpg" loading="lazy">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<p class="titulo p-2">Tu mejor opción</p>
						<div class="imagenYParrafo ">
							<img class="imagenes img-fluid imagen2 m-2" src="img/ilustracion.png" loading="lazy">
							<div class="parrafo">
								<p class="h1 centrado">Estás a pocos clicks de distancia!<p>
								<p class="justificado p-2">Comienza ya a disfrutar de las ventajas de tener presencia online y funcionalidades web acordes a tus necesidades</p>
								<div class="llamado">
									<a id="btn-Servicio" href="#" class="boton">
										¡Solicitar Servicio YA!
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<p class="titulo p-2">Diseño "Responsive"</p>
						<div class="imagenYParrafo ">
							<img class="imagenes imagen1 m-2" src="img/car3.jpg" loading="lazy">
							<div class="parrafo">
								<p class="h1 centrado">Tu web en dispositivos de cualquier tamaño<p>
								<p class="justificado p-2"> Obtén tu diseño adaptable a móviles y tablets</p>
							</div>
						</div>
					</div>
				</div>

				<a href="#slideshow" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon" aia-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a href="#slideshow" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon" aia-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
			<div class="d-flex d-md-none carousel slide carousel-fade" id="slideshow2" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slideshow2" data-slide-to="0" class="active">
						
					</li>
					<li data-target="#slideshow2" data-slide-to="1">
						
					</li>
					<li data-target="#slideshow2" data-slide-to="2">
						
					</li>		
				</ol>


				<div class="carousel-inner ">
					
					<div class="carousel-item active">
							<div class="d-flex justify-content-center col-12">
								<p class="rounded col-8 shadow text-center p-2 h2 badge-success mt-4 mb-3">Diseño de páginas web</p>
							</div>
						<div class=" ">
							<img class="img-fluid" src="img/PC1.jpg" loading="lazy">
							<div class="">
								<p class="mt-3 p-2 text-center text-light h3">Desarrollo Web a tu medida<p>
								<p class="mt-1 p-3 text-justify text-light h4"> Te ayudamos a llegar a mas clientes con un sitio web atractivo y funcional.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="d-flex justify-content-center col-12">
							<p class="rounded col-8 shadow text-center p-2 h2 badge-success mt-4 mb-3">Tu mejor opción</p>
						</div>
						<div class="">
							<img class="img-fluid" src="img/ilustracion.png" loading="lazy">
							<div class="">
								<p class="mt-3 p-2 text-center text-light h3">Estás a pocos clicks de distancia!<p>
								<p class="mt-1 p-3 text-justify text-light h4">Comienza ya a disfrutar de las ventajas de tener presencia online y funcionalidades web acordes a tus necesidades</p>
								<div class="d-flex justify-content-center mb-5">
									<a id="btn-Servicio" href="#" class="d-none boton btn btn-success">
										¡Solicitar Servicio YA!
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="d-flex justify-content-center">
							<p class="rounded col-8 shadow text-center p-2 h2 badge-success mt-4 mb-3">Diseño adaptable</p>
						</div>
						<div class="">
							<img class="img-fluid" src="img/car3.jpg" loading="lazy">
							<div class="">
								<p class="mt-3 p-4 text-center text-light h3">Tu sitio en dispositivos de cualquier tamaño<p>
								<p class=" p-3 text-justify text-light h4"> Obtén tu diseño adaptable a móviles y tablets</p>
							</div>
						</div>
					</div>
				</div>

				<a href="#slideshow2" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon" aia-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a href="#slideshow2" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon" aia-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>

		</div>
		<div class="contenido2">
			<div id="Portafolio" class="contenidoA">
				<p class="h2 tituloPortafolio">Portafolio</p>
				<p class="parrafoPortafolio">Aca una selección de muestra de algunos de nuestros proyectos</p>
			</div>

			<img class="imgPortafolio img-fluid" src="img/development.png" alt="">
			<div class="contenidoB d-flex justify-content-center flex-wrap">
				<div class="galeria d-flex justify-content-between p-5 m-2 h-50 flex-wrap col-12">
				  	<div class="col-xs-12 col-sm-5 col-md-3 p-2 m-1 card">
				  		<a target="_blank" class="linkGaleria" href="psushi/index.html"><img class="card-img-top mh-100 mw-10" src="img/pagina1.png" alt="Card image cap">
				  		<div class="card-body cuerpo" loading="lazy">Página web de ejemplo, Restaurant de sushi</div></a>
				  	</div>
					<div class="col-xs-12 col-sm-5 col-md-3 p-2 m-1 card">
						 <a class="linkGaleria" href="https://ramesptop.com/pcevicheria" target="_BLANK"><img class="card-img-top" src="img/pagina8.png" alt="Card image cap" loading="lazy">
				  					<div class="card-body cuerpo">Página web de ejemplo, Cevicheria</div></a>
				  				</div>
					<div class="col-xs-12 col-sm-5 col-md-3 p-2 m-1 card">
						 <a class="linkGaleria" href="pcafe/index.html" target="_BLANK"><img class="card-img-top" src="img/pagina4.png" alt="Card image cap" loading="lazy">
					 	 <div class="card-body cuerpo">Página web de ejemplo, Cafeteria</div></a>
					</div>
				</div>
				<div class="galeria d-flex justify-content-between p-5 h-50 flex-wrap col-12">
						<div class="card col-xs-12 col-sm-5 col-md-3 p-2 mb-3">
							<a class="linkGaleria" href="https://blog.ramesptop.com/tienda" target="_BLANK"><img class="card-img-top" src="img/pagina5.png" alt="Card image cap" loading="lazy">
							<div class="card-body cuerpo">Página web de ejemplo, Tienda online</div></a>
						</div>
						<div class="card col-xs-12 col-sm-5 col-md-3 p-2 mb-3">
						  	<a class="linkGaleria" href="podontologia/index.html" target="_BLANK"><img class="card-img-top" src="img/pagina6.png" alt="Card image cap"loading="lazy">
						  	<div class="card-body cuerpo">Página web de ejemplo, Clínica odontológica</div></a>
						</div>
						<div class="card col-xs-12 col-sm-5 col-md-3 p-2 mb-3">
						  	<a class="linkGaleria" href="https://blog.ramesptop.com" target="_BLANK"><img class="card-img-top" src="img/pagina7.png" loading="lazy" alt="Card image cap">
						  	<div class="card-body cuerpo">Blogs de noticias o de artículos variados</div></a>
						</div>
			</div>
			</div>
		</div>
		<div class="contenido3">
			<div class="row p-5">
				<div id="Contacto" class="contactanosA col-12 d-flex justify-content-center">
						<h2 class="tituloContactanos text-align-center">Contacto</h2>
				</div>
				<div class="derecho col-sm-12 d-flex justify-content-center col-md-6">
					<img src="img/email2.png" loading="lazy" class="emailLogo img-fluid" alt="Responsive image">
				</div>
				<div class="izquierdo col-sm-12 col-md-6">
					<form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<div class="form-group">
							<input type="text" placeholder="Nombre" name="nombre" class="mt-4 form-control" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" id="nombre">
							<input type="email" placeholder="Correo" name="correo" class="mt-4 form-control" value="<?php if(!$enviado && isset($correo)) ?>" id="correo">
							<textarea name="mensaje" type="text" placeholder="Mensaje" class=" mt-4 form-control" value="<?php if(!$enviado && isset($mensaje)) echo $mensaje ?>"></textarea>
							<?php if(!empty($errores)): ?>
							<div class="alert error">
									<?php echo $errores; ?>
							</div>
							<?php elseif ($enviado): ?>
							
							<script language="javascript">alert("Mensaje enviado correctamente"); </script>
				
							<?php endif?>
				
							<input type="submit" name="submit" value="Enviar" class="btn btn-success mt-4 w-25 float-right p-2" >
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="sidebar"></div>
		<footer class="footer">
			<div id="Redes" class="row redes d-flex justify-content-center mt-4 mb-5">
				<div class=" redesS d-flex justify-content-between flex-wrap">
					<a class=" mt-2 " href="https://wa.me/51941339689" target="_BLANK" ><i class="iconos whatsapp fab fa-whatsapp-square"></i></a><a href="#">
					<a class=" mt-2 " href="https://twitter.com/ramesptopweb" target="_BLANK" ><i class="iconos twitter fab fa-twitter-square"></i></a>
					<a class=" mt-2 " href="https://www.facebook.com/Ramesptop-Web-113536130252621/" target="_BLANK" ><i class="iconos facebook fab fa-facebook-square"></i></a>
					<a class=" mt-2 " href="https://www.instagram.com/ramesptopweb/" target="_BLANK" ><i class="iconos instagram fab fa-instagram-square"></i></a>
					<a class=" mt-2 " href="https://www.pinterest.es/Ramesptopweb/" target="_BLANK" ><i class="iconos pinterest fab fa-pinterest-square" ></i></a>
					
				</div>
			</div>
			<div class="d-flex justify-content-center">
				<img class="LogoF img-fluid" loading="lazy" src="img/logoR6.png" >
			</div>
				<p class="text-center derechos p-4">René Ramírez Espinoza - Diseños Ramesptop Web design - 2020 </p>
		</footer>
	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://unpkg.com/@popperjs/core@2.0.0-rc.3"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="efectos.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	
</body>
</html>