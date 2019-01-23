<?php
$conexion = new mysqli('localhost', 'root','', 'ajax');


if ($conexion->connect_errno) {
    $respuesta = [
        'error' => true
    ];
}else{
    $conexion ->set_charset("utf-8");
    $statement = $conexion->prepare("SELECT * FROM usuarios");
    $statement->execute();

    $resultados = $statement->get_result();

    $respuesta = [];

    while($fila = $resultados->fetch_assoc()){
        $usuario = [
            'id'    =>  $fila['ID'],
            'nombre' => $fila['nombre'],
            'edad'  =>  $fila['edad'],
            'pais'  =>  $fila['pais'],
            'correo' => $fila['correo']
        ];

        array_push($respuesta, $usuario);
    }
}
?>