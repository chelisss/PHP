<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <title>Galeria</title>
  </head>
  <body>
    <header>
      <div class="contenedor">

      	<h1 class="titulo">Mi increible Galería en PHP y MySQL</h1>
      
      </div>
    </header>

    <section class="fotos">
    	<div class="contenedor">


    		<?php foreach($fotos as $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id']; ?>">
						<img src="fotos/<?php  echo $foto['imagen'] ?>" alt="<?php  echo $foto['titulo'] ?>">
					</a>
				</div>
    		<?php endforeach; ?>


    		<div class="paginacion">

				<?php if($pagina_actual > 1): ?>
					<a class="izquierda" href="index.php?p=<?php echo $pagina_actual - 1?>"> <i class="fa fa-long-arrow-left"></i> Página Anterior </a>
				<?php endif; ?>

				<?php if($total_paginas != $pagina_actual): ?>
					<a class="derecha" href="index.php?p=<?php echo $pagina_actual + 1?>"> Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
				<?php endif; ?>


    		</div>


    		<!-- Termina div contenedor-->
    	</div>
    </section>

<!--Sección de Footer -->
    <footer> <p class="copyright"> Galeria creada por Luis Enrique</p> </footer>

  </body>
</html>
