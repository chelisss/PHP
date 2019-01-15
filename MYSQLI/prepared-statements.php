<?php


$conexion = new mysqli('localhost','root','','prueba_datos');
if($conexion -> connect_errno){
    die('Lo siento, tuvimos problemas con el servidor');
}else{

    $statement = $conexion->prepare("INSERT INTO usuarios(id, nombre, email) VALUES(?,?,?)");
    //ahora vamos a reemplazar estos placeholders
        //Una S por placeholeder que tengamos
        // S = string
        // i = integer
        // d = double
    $statement -> bind_param('sss', $id, $nombre, $email);
    $id = null;
    
    if (isset($_GET['nombre']) && isset($_GET['email'])) {
        $nombre = $_GET['nombre'];       
        $email = $_GET['email'];
    }
    
    $statement -> execute();
    
    if($conexion->affected_rows >= 1){
        echo 'Filas Agregadas: ' . $conexion->affected_rows;
    }else {
        echo 'No se agregó nada';
    }
}
?>