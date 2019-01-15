<?php


$conexion = new mysqli('localhost','root','','prueba_datos');
if($conexion -> connect_errno){
    die('Lo siento, tuvimos problemas con el servidor');
}else{

    $sql = "INSERT INTO usuarios(id, nombre, email) VALUES(null, 'Leticia','pelusa@correo.com')";
    $conexion->query($sql);
    if($conexion->affected_rows >= 1){
        echo 'Filas Agregadas: ' . $conexion->affected_rows;
    }
}
?>