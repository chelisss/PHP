<?php
$paises = array('México', 'España', 'Colombia', 'Perú', 'Argentina', 'Chile', 'Guatemala' );

// foreach ($paises as $pais) {
    
//     if($pais == 'Colombia'){
//         break;
//     }
//     Con Break, sale completamente el ciclo de ejecución
//     echo $pais . '</br>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
</head>
<body>
    <h1> Paises Latinoamericanos </h1>
    <?php 
    foreach($paises as $pais){
        if($pais == 'España'){
            continue;
        }
        //Si encuentra 'España', saltamos a la sigueinte iteración del ciclo
        echo $pais . '</br>';
    }
    ?>
</body>
</html>