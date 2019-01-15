<?php 
$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion -> connect_errno){
    die('Lo siento, hubo un problema con el servidor');
}else {
    
    $sql = 'SELECT * FROM usuarios';
    $resultado = $conexion -> query($sql);
    
    //PAra mostrar resultados en pantalla
    //comprobamos primero si habia datos

    if($resultado->num_rows){
        $resultado->fetch_assoc();
    }else{
        echo "No hay información.";
    }

}
?>