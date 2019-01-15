<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo RUTA;?>font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
	
	<title>Blog Hermoso</title>
	
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
			<p><a href="<?php echo RUTA;?>">Mi primer blog</a></p>
		</div>

		<div class="derecha">
			<form class="buscar" method="get" name="busqueda" action="<?php echo RUTA;?>buscar.php">
				<input type="text" name="busqueda" placeholder="Buscar">
				<button type="submit" class= "icono fa fa-search"></button>
			</form>

			
			<nav class="menu">
				<ul>
					<li>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>