<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Articulos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    <script src="main.js"></script>
</head>
<body>

<div class="contenedor">

    <h1>Articulos</h1>
    <section class="articulos">
        <ul>
            <?php foreach ($articulos as $articulo): ?>
                <li><?php echo $articulo['id'] . ' .- ' . $articulo['articulo']; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="paginacion">
        <ul>
            <?php if($pagina == 1): ?>
                <li class="disabled">&laquo;</li>
            <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina-1?>">&laquo;</a></li>
            <?php endif ?>

        <?php 
        for ($i=1; $i <= $numeroPaginas ; $i++) { 
            if ($pagina == $i) {
                echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
            }else{
                echo "<li><a href='?pagina=$i'>$i</a></li>"; 
            }
        }
        ?>

            <?php if($pagina == $numeroPaginas): ?>
                <li class="disabled">&raquo;</li>
            <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina+1?>">&raquo;</a></li>
            <?php endif ?>
        </ul>
    
    </section>
</div>
    
</body>
</html>