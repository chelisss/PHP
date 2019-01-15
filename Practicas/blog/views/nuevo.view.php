<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Nuevo Artículo</h2>
			<form method="post" class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				
				<input type="text" name="titulo" placeholder="Titulo del artículo">
				<input type="text" name="extracto" placeholder="Extracto del artículo">
				<textarea name="texto" placeholder="Texto del Artículo"></textarea>
				<input type="file" name="thumb">

				<input type="submit" value="Publicar">

			</form>
		</article>

	</div>
</div>



<?php require 'footer.php'; ?>