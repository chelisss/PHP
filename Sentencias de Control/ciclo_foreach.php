<?php
$meses = array(
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);
// foreach se ejecuta mientras encuentre valores en el arreglo.


$luis = array('Telefono' => 5513323011, 'Edad' => 20, 'Pais' => 'Mexico');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <!-- <h1>Meses</h1> -->
    <ul>
        <?php
            //Este es para arreglos normales
            // foreach ($meses as $mes) {
            //    echo '<li>'. $mes .'</li>';
            // }
            
            //Este es para arreglos asociativos
            foreach($luis as $llave => $valor){
                echo '<li>'. $llave.' : '. $valor .'</li>';
            }
        ?>

    </ul>
</body>
</html>