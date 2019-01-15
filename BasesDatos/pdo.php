<?php 
//$id = $_GET['id'];

try{
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
    //echo "Conexión OK";

    // $resultados = $conexion ->query("SELECT * FROM usuarios WHERE id = $id");
    
    // foreach($resultados as $fila)   {
    //     echo $fila['id'] . ' - '. $fila['nombre'] .'<br/>';

        $statement =$conexion -> prepare('INSERT INTO usuarios VALUES(null, "Jose", "jl@gmail.com")');
        $statement -> execute();

        // $resultados = $statement ->fetchAll();
        // foreach($resultados as $usuario){
        //     echo $usuario['nombre'] . '<br/>';
        // }

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
?>