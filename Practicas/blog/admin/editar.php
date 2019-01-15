<?php 
session_start();


require 'config.php';
require '../funciones.php';


comprobarSesion();

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: ../error.php');	 
}

//Significa que se han enviado datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
	//AL PRESIONAR ENVIAR O MODIFICAR, AQUI MANEJAMOS ESTOS DATOS EVNIADOS DESDE LA MISMA PÁGINA
	$titulo = limpiarDatos($_POST['titulo']);
	$extracto = limpiarDatos($_POST['extracto']);
	$id = limpiarDatos($_POST['id']);
	$texto = $_POST['texto'];
	$thumb_guardada = $_POST['thumb-guardada'];
	$thumb = $_FILES['thumb'];

	if (empty($thumb['name'])) {
		$thumb = $thumb_guardada;
	}else{
		$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
		move_uploaded_file($_FILES['thumb']['temp_name'], $archivo_subido);

		$thumb = $_FILES['thumb']['name'];
	}



	//Ahora vamos a subir los archivos a la base de datos. 
	$statement = $conexion->prepare('UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto= :texto, thumb = :thumb WHERE id = :id');

	$statement->execute(array(
			':titulo' => $titulo,
			':extracto' => $extracto,
			':texto' => $texto,
			':thumb' => $thumb,
			':id' => $id
		));

	header('Location: ' . RUTA .'admin');

}else{
	$id_articulo = idArticulo($_GET['id']);

	if (empty($id_articulo)) {
		header('Location: ' . RUTA . 'admin');
	}

	$post = obtener_post_por_id($conexion, $id_articulo);

	if (!$post) {
		header('Location: ' . RUTA . 'admin');
	}

	$post = $post[0];
}


require '../views/editar.view.php';
 ?>