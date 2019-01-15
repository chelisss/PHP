<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <title>Subir foto</title>
  </head>


  <body>
<!-- SECCIÓN DEL HEADER-->
    <header>
      <div class="contenedor">
      	<h1 class="titulo">Subir foto</h1>
      </div>
    </header>

  <div class="contenedor">
      <form enctype="multipart/form-data" class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        
          <label for="foto">Selecciona tu foto</label>
          <input type="file" id="foto" name="foto">

          <label for="titulo">Título de la foto</label>
          <input type="text" id="titulo" name="titulo">

          <label for="texto">Descripción </label>
          <textarea name="texto" id="texto" placeholder="Subir Foto"></textarea>

          <?php if(isset($error)): ?>
            <p class="error"> <?php echo $error; ?></p>
          <?php endif; ?>

          <input type="submit" class="submit" value="Subir Foto"> 
      </form>

  </div>

    

<!--SECIÓN DEL FOOTER -->
    <footer> <p class="copyright"> Galeria creada por el ingeniero Luis Enrique</p> </footer>

  </body>
</html>
