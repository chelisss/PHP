<?php
header('Content-type: application/json; charset=utf=8');

$respuesta = [
    [
        'id' => '5w5v5vw5vw5w5555er3',
        'nombre' => 'Carlos',
        'edad' => 23,
        'pais' => 'México',
        'correo' => 'correo@correo.com'
    ],
    [
        'id' => '5k6b3546b3j45hb6bfd',
        'nombre' => 'Luis',
        'edad' => 30,
        'pais' => 'España',
        'correo' => 'correo@correo.com'
    ]
];

echo json_encode($respuesta);

?>